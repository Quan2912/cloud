<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\Validator;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    //
    public function index(){
        $slider = Slider::all();
        return view('pages.listSlider', compact('slider'));

    }
    public function getAddSlider(){
        return view('pages.addSlider');
    }
    public function postAddSlider(Request $request){
        $slider=new Slider();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/img/', $filename);
            $slider->image=$filename;
        }
        
        $slider->title=$request->input('title');
        
        $slider->save();
        return redirect()->route('sliders.index')->with('success', 'Add New Slider Successfully!');     
    }

    public function getEditSlider($id){
        $data['slider']=Slider::find($id);
        return view('pages.editSlider',$data);
    }
    public function postEditSlider(Request $request,$id){
        $slider=Slider::find($id);
        if($request->hasFile('image'))
        {
            $path='uploads/img/'.$slider->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file=$request->file('image');                
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/img/', $filename);
            $slider->image=$filename;
            
        }
            
        $slider->title=$request->input('title');
        
        $slider->save();
        return redirect()->route('sliders.index')->with('success', 'Slider Updated Successfully!');
    }

    public function deleteSlider($id){
        $slider =Slider::find($id);
        $path = 'uploads/img/'.$slider->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider Deleted Successfully!');
    }
}
