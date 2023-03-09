<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class Productcontroller extends Controller
{
    public function index(Request $request)
    {
        $Product=Products::get();
        $data['Product']=$Product;
        return view('products.productlist',$data);
    }
   public function create(Request $request)
   {
    return view('products.addproduct');
   }
   public function store(Request $request)
   {
      $Product=new Products();
      $Product->id=$request->id; 
      $Product->name=$request->name;
      $Product->shortdescription=$request->shortdescription;
      $Product->description=$request->description;
      $Product->price=$request->price; 
      $Product->discount=$request->discount;
      $Product->quantity=$request->quantity; 
      $Product->status=$request->status;
      $Product->save();
    return redirect()->route('product.index');
   }
   public function edit(Request $request, $id)
{
    $Product = Products::where('id',"=",$id)->first();
    $data['Product']=$Product;
    return view('products.edit',$data);
}
  public function update(Request $request, $id)
  {
      $Product = Products::where('id',"=",$id)->first();
      $Product->id=$request->id; 
      $Product->name=$request->name;
      $Product->shortdescription=$request->shortdescription;
      $Product->description=$request->description;
      $Product->price=$request->price; 
      $Product->discount=$request->discount;
      $Product->quantity=$request->quantity; 
      $Product->status=$request->status;
      $Product->save();
      return redirect()->route('product.index');
  }
 public function delete(Request $request,$id)
 {
   $Product=Products::where('id',"=",$id)->first();
   $Product->delete();
   return back();  
 }
}
