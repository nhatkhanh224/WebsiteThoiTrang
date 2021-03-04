<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product=Product::all();
        return view('admin/product/show')->with(compact('product'));
    }
    public function insert(Request $request){
        return view('admin/product/insert');
    }
    public function edit(Request $request,$id=null){
        
    }
}
