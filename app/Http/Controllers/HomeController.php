<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\ImageProduct;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $product=Product::paginate(6);
        return view('web/index')->with(compact('product'));
    }
    public function productByCategory($slug=null){
        $category=Category::where('slug',$slug)->first();
        $id_category=$category->id;
        $product=Product::where('id_category',$id_category)->paginate(6);
        return view('web/productByCategory')->with(compact('product','category')
        );

    }
    public function detail(Request $request,$slug=null){
        $product=Product::where('slug',$slug)->first();
        $id_product=$product->id;
        $image_product=ImageProduct::where('id_product',$id_product)->get();
        return view('web/detail')->with(compact('product','image_product'));
    }
    public function history(){
        $emails = Auth::user()->email;
        $name=Auth::user()->name;
        $order = Order::where('user_email',$emails)->orderBy('id','desc')->get();
        return view('web/history')->with(compact('order','name'));
    }
    public function search(Request $request){
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $key=$data['key'];
            $product=Product::where('product_name','like','%'.$key.'%')->get();
            $count=Product::where('product_name','like','%'.$key.'%')->count();
            return view('web/search')->with(compact('product','key','count'));
        }
    }
    
}
