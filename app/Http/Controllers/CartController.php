<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Session;
use Illuminate\Support\Str;

class CartController extends Controller
{
   public function index(){
       return view('web/cart');
   }
   public function addToCart(Request $request){
       $session_id=Str::random(40);
       Session::put('session_id',$session_id);
       if ($request->isMethod('POST')) {
           $data=$request->all();
           $cart = new Cart();
           $cart->id_product=$data['id_product'];
           $cart->product_name=$data['product_name'];
           $cart->product_code=$data['product_code'];
           $cart->price=$data['price'];
           $cart->thumbnail=$data['thumbnail'];
           $cart->size=$data['size'];
           $cart->color=$data['color'];
           $cart->quantum=1;
           $cart->session_id=$session_id;
           $cart->save();
           return redirect('/cart');
       }
    }
}
