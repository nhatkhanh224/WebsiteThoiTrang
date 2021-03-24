<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   public function index(){
        $cartCookie=Cookie::get('cart');
        $email=Auth::user()->email;
        if ($cartCookie) {
            $cart=Cart::where('session_id',$cartCookie)->get();
        }else if ($email) {
            $cart=Cart::where('user_email',$email)->get();
        }
        else{
            $cart=null;
        }

        return view('web/cart')->with(compact('cart'));
   }
   public function addToCart(Request $request){
       $cartCookie=$request->cookies->get('cart');
       $email=Auth::user()->email;
       if ($cartCookie) {
           $session_id=$cartCookie;
       }
       else {
        $session_id=Str::random(40);
        Cookie::queue('cart',$session_id,2592000);
        $cartCookie=Cookie::get('cart');
       }
    
    //    echo "<pre>";print_r($cartCookie);die;
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
           if ($email) {
               $cart->user_email=$email;
           }
           if ($cartCookie) {
               $cart->session_id=$cartCookie;
           }
           else{
            $cart->session_id=$session_id;
           }
           $cart->save();
           return redirect('/cart');
       }
    }
    public function updateQuantity($id=null,$number=null){
        $cart=Cart::where('id',$id)->first();
        $quantum=$cart->quantum;
        $quantum+=$number;
        Cart::where('id',$id)->update(['quantum'=>$quantum]);
        return redirect('/cart');
    }
    public function deleteCart($id=null){
        if (!empty($id)) {
            Cart::where('id',$id)->delete();
            return redirect('/cart');
        }
    }
    public function payment(Request $request){
        $email=Auth::user()->email;
        $cartCookie=$request->cookies->get('cart');
        $user=Auth::user();
        if ($email) {
            $cart=Cart::where('user_email',$email)->get();
        }
        else{
            $cart=Cart::where('session_id',$cartCookie)->get();
        }
        return view('web/payment')->with(compact('cart','user'));
    }
}
