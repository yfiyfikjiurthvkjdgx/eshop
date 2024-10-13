<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function addproduct(){
    return view('backend.pages.addproduct');
  }
  public function allproduct(){
    $products = Product::all();
    return view('backend.pages.allproduct',compact('products'));
  }

  public function storeproduct(Request $request){
   $product = new Product();
   $product->productname = $request->productname;
   $product->productcetagory = $request->productcetagory;
   $product->productprice = $request->productprice;
   $product->productdescription = $request->productdescription;
   if(isset($request->productphoto)){
       $image = $request->file('productphoto');
       $image_name = $request->productname.'.'.$image->getClientOriginalExtension();
       $image->move(public_path('backend/uploads/product'),$image_name);
       $product->productphoto = $image_name;
   }
   $product->save();
   session()->flash('success','Product Added Successfully');
   return redirect()->back();
  }

  public function editproduct($id){
    $product = Product::find($id);
    return view('backend.pages.editproduct',compact('product'));
  }

  public function updateproduct(Request $request,$id){
    $product = Product::find($id);
    $product->productname = $request->productname;
    $product->productcetagory = $request->productcetagory;
    $product->productprice = $request->productprice;
    $product->productdescription = $request->productdescription;
    if(isset($request->productphoto)){
        $image = $request->file('productphoto');
        $image_name = $request->productname.'.'.$image->getClientOriginalExtension();
        $image->move(public_path('backend/uploads/product'),$image_name);
        $product->productphoto = $image_name;
    }
    $product->update();
    session()->flash('success','Product Updated Successfully');
    return redirect()->back();
   }

   
  public function deleteproduct($id){
    $product = Product::find($id);
    $product->delete();
    session()->flash('success','Product deleted Successfully');
    return redirect()->back();
   }
    


}
