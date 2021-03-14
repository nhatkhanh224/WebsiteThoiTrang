<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ImageProduct;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $product=Product::all();
        return view('web/index')->with(compact('product'));
    }
    function detail(Request $request,$slug=null){
        $product=Product::where('slug',$slug)->first();
        $id_product=$product->id;
        $image_product=ImageProduct::where('id_product',$id_product)->get();
        return view('web/detail')->with(compact('product','image_product'));
        
    }
    
}
