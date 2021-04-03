<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Coupon;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   public function index(Request $request){
        $cartCookie=Cookie::get('cart');
        if (Auth::check()) {
            $email=Auth::user()->email;
            $cart=Cart::where('user_email',$email)->get();
            $countCart=Cart::where('user_email',$email)->count();
        }
        else {
            $cart=Cart::where('session_id',$cartCookie)->get();
            $countCart=Cart::where('session_id',$cartCookie)->count();
        }
        $request->session()->forget(['CouponAmount', 'CouponCode','CouponType']);
        return view('web/cart')->with(compact('cart','countCart'));
   }
   public function addToCart(Request $request){
       $cartCookie=$request->cookies->get('cart');
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
           if (Auth::check()) {
                $email=Auth::user()->email;
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
        if (Auth::check()) {
            $email=Auth::user()->email;
            $user=Auth::user();
            $cart=Cart::where('user_email',$email)->get();
        }
        else{
            $user=null;
            $cartCookie=$request->cookies->get('cart');
            $cart=Cart::where('session_id',$cartCookie)->get();
        }
        return view('web/payment')->with(compact('cart','user'));
    }
    public function useCoupon(Request $request){
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $coupon_name=$data['coupon_name'];
            $couponCount=Coupon::where('coupon_name',$coupon_name)->count();
            $coupon=Coupon::where('coupon_name',$coupon_name)->first();
            $couponDue=$coupon->expiry_date;
            $startDate=$coupon->start_date;
            $coupon_type=$coupon->type;
            if ($couponCount==0 || $couponDue<date('Y-m-d') || $startDate>date('Y-m-d')) {
                return redirect()->back();
            }
            $coupon_amount=$coupon->money;
            Session::put('CouponType',$coupon_type);
            Session::put('CouponAmount',$coupon_amount);
            Session::put('CouponCode',$coupon_name);
        }
        return redirect()->back();
    }
    public function order(Request $request){
        if ($request->session()->has(['CouponCode','CouponAmount'])) {
            $coupon_name=session('CouponCode');
            $coupon_amount=session('CouponAmount');
        }
        else{
            $coupon_name=null;
            $coupon_amount=null;
        }
        $cartCookie=Cookie::get('cart');
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $order=new Order();
            $order->user_email=$data['email'];
            $order->name=$data['name'];
            $order->address=$data['address'];
            $order->phone=$data['phone'];
            $order->ship=$data['ship'];
            $order->coupon=$coupon_name;
            $order->coupon_money=$coupon_amount;
            $order->total=$data['total'];
            $order->option=$data['option'];
            $order->status='Mới đặt hàng';
            $order->save();
            $order_id=$order->id;
            
            if (Auth::check()) {
                $email=Auth::user()->email;
                $cart=Cart::where('user_email',$email)->get();
            }else {
                $cart=Cart::where('session_id',$cartCookie)->get();
            }
            foreach($cart as $cart) {
                $order_product=new OrderProduct();
                $order_product->order_id=$order_id;
                $order_product->product_id=$cart->id_product;
                $order_product->product_code=$cart->product_code;
                $order_product->product_name=$cart->product_name;
                $order_product->size=$cart->size;
                $order_product->price=$cart->price;
                $order_product->quantum=$cart->quantum;
                $order_product->thumbnail=$cart->thumbnail;
                $order_product->save();
            }
            if (Auth::check()) {
               $email=Auth::user()->email;
               Cart::where('user_email',$email)->delete();
            }
            else {
                Cart::where('session_id',$cartCookie)->delete();
            }
        }
        return redirect('/');
    }
}
