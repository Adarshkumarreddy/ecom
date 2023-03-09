<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class Usercontroller extends Controller
{
    public function index(Request $request)
    {
        $User=User::get();
        $data['User']=$User;
        return view('user.userlist',$data);
    }
   public function create(Request $request) 
   {
    return view('user.adduser');
   }
   public function store(Request $request)
   {
    $User = new User();
    $User->id=$request->id; 
    $User->name=$request->name;
    $User->email=$request->email;
    $User->password=$request->password;
    $User->save();
    return redirect()->route('user.index');
   }
   public function edit(Request $request,$id)
   {
    $User = User::where('id',"=",$id)->first();
    $data['User']=$User;
    return view('user.useredit',$data);
   }
   public function update(Request $request,$id)
   {
    $User = User::where('id',"=",$id)->first();
    $User->id=$request->id;
    $User->name=$request->name;
    $User->email=$request->email;
    $User->password=$request->password;
    $User->save();
    return redirect()->route('user.index');
   }
   public function delete(Request $request,$id)
   {
    $User=User::where('id',"=",$id)->first();
    $User->delete();
    return back();
   }
}
