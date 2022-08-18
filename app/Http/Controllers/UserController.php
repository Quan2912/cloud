<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view('pages.listUser', compact('user'));
    }
    public function getEditUser($id)
    {
        $data['user'] = User::find($id);
        return view('pages.editUser', $data);
    }
    public function postEditUser(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'role' => 'required',

            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $user = User::find($id);
            $user->role = $request->role;

            $user->save();
            return redirect()->route('users.index')->with('success', 'Edit Role Successfully!');
        }
    }
    public function deleteUser($id){
        $user=User::find($id);
        $user->delete();
        return back();
    }
}
