<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $product=Product::all();
        return view('web/index')->with(compact('product'));
    }
    function detail(Request $request,$slug=null){
        $product=Product::where('product_name',$slug);
        return view('web/detail')->with(compact('product'));
        
    }
    
}
