<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function welcome()
    {
        return view('frontend.pages.welcome');
    }
    public function service()
    {
        $products = Product::all();
        return view('frontend.pages.service',compact('products'));
    }
    public function showProduct($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.show-product',compact('product'));
    }
}
