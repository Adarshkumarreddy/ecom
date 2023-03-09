<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class Brandcontroller extends Controller
{
    public function index(Request $request)
    {
        $Brand=Brand::get();
        $data['Brand']=$Brand;
        return view('brand.brandlist',$data);
    }
    public function create(Request $request)
    {
       return view('brand.addbrand');
    }
    public function store(Request $request)
    {
    $Brand = new Brand();
    $Brand->id=$request->id; 
    $Brand->name=$request->name;
    $Brand->description=$request->description;
    $Brand->status=$request->status;
    $Brand->save();
    return redirect()->route('brand.index');
    }
    public function edit(Request $request,$id)
    {
     $Brand = Brand::where('id',"=",$id)->first();
     $data['Brand']=$Brand;
     return view('brand.edit',$data);
    }
    public function update(Request $request,$id)
   {
    $Brand = Brand::where('id',"=",$id)->first();
    $Brand->id=$request->id;
    $Brand->name=$request->name;
    $Brand->description=$request->description;
    $Brand->status=$request->status;
    $Brand->save();
    return redirect()->route('brand.index');
   }
   public function delete(Request $request,$id)
   {
    $Brand=Brand::where('id',"=",$id)->first();
    $Brand->delete();
    return back();
   }
}
