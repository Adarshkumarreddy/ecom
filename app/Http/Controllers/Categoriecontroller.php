<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;

class Categoriecontroller extends Controller
{
    public function dash()
    {
        return view('dash');
    }

//crud poerations starts
    
   public function index(Request  $request)
   {
       $Categorie=Categorie::get();
       $data['Categorie']=$Categorie;
       return view('categorie.list',$data);
   }
  public function create(Request $request)
  {
     return view('categorie.add');
  }
 public function store(Request $request)
 {
    $Categorie = new Categorie();
    $Categorie->id=$request->id; 
    $Categorie->name=$request->name;
    $Categorie->slug=$request->slug;
    $Categorie->status=$request->status;
    $Categorie->save();
    return redirect()->route('categorie.index');
 }
 public function edit(Request $request, $id)
{
    $Categorie = Categorie::where('id',"=",$id)->first();
    $data['Categorie']=$Categorie;
    return view('Categorie.edit',$data);
}
public function update(Request $request,$id)
{
  $Categorie = Categorie::where('id',"=",$id)->first();
  $Categorie->id=$request->id;
  $Categorie->name=$request->name;
  $Categorie->slug=$request->slug;
  $Categorie->status=$request->status;
  $Categorie->save();
  return redirect()->route('categorie.index');
}
public function delete(Request $request,$id)
{
    $Categorie=Categorie::where('id',"=",$id)->first();
    $Categorie->delete();
    return back();
}
}

