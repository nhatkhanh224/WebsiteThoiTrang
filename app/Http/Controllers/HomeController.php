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
        if (!empty($_GET['price'])) {
            $price=explode('-',$_GET['price']);
            $min_price=$price[0];
            $max_price=$price[1];
            $product=Product::where('id_category',$id_category)->whereBetween('price',[$min_price,$max_price])->paginate(6);
            
        }
        if (!empty($_GET['color'])) {
            $color=$_GET['color'];
            $product=Product::where('id_category',$id_category)->where('color',$color)->paginate(6);
            
        }
        else{
            $product=Product::where('id_category',$id_category)->paginate(6);
        }
        return view('web/productByCategory')->with(compact('product','category')
        );

    }
    public function detail(Request $request,$slug=null){
        $product=Product::where('slug',$slug)->first();
        if (Product::where('id_category',$product->id_category)->count() <3) {
            $relatedProduct=Product::all();
        }
        else {
            $relatedProduct=Product::where('id_category',$product->id_category)->get();
        }
        $id_product=$product->id;
        $image_product=ImageProduct::where('id_product',$id_product)->get();
        return view('web/detail')->with(compact('product','image_product','relatedProduct'));
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
    public function filterPrice(Request $request){
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $priceUrl="";
            if (!empty($data['min_price'])) {
                if (empty($priceUrl)) {
                    $priceUrl="&price=".$data['min_price'];
                }else {
                    $priceUrl="-".$data['min_price'];
                }
            }
            // echo "<prev>";print_r($data['min_price']);die();
            $finalUrl="/category/".$data['url']."?".$priceUrl;
            return redirect($finalUrl);
            
        }
    }
    public function filterColor(Request $request){
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $colorUrl="";
            if (!empty($data['color'])) {
                if (empty($colorUrl)) {
                    $colorUrl="&color=".$data['color'];
                }else {
                    $colorUrl="-".$data['color'];
                }
            }
            $finalUrl="/category/".$data['url']."?".$colorUrl;
            return redirect($finalUrl);
        }
    }
    
}
