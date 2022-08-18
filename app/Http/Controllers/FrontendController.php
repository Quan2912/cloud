<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('client.index', compact('product'));
    }
    
    public function viewCategory($name)
    {
        $category=Category::all();
        if(Category::where('name', $name)->exists())
        {
            $category=Category::where('name', $name)->first();
            $products=Product::where('category_id', $category->id)->get();
            return view('client.category',compact('category','products'));
        }
        else
        {
            return redirect('/');
        }
    }
    public function detail($id)
    {
        $products=Product::find($id);
        return view('client.detail',compact('products') ) ;
    }


    
    public function about()
    {
        return view('client.about');
    }
    public function menu()
    {
        return view('client.menu');
    }
    public function order()
    {
        return view('client.order');
    }
    public function faq()
    {
        return view('client.faq');
    }
      
    
}
