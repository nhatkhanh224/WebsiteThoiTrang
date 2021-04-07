<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
class OrderController extends Controller
{
    public function index() {
        $order=Order::all()->sortByDesc("id");
        return view('admin/order/index')->with(compact('order'));
    }
    public function detail ($id=null) {
        $orderProduct=OrderProduct::where('order_id',$id)->get();
        return view('admin/order/detail')->with(compact('orderProduct'));
    }
    public function setStatus(Request $request,$id=null) {
        
        if ($request->isMethod('POST')) {
            $data=$request->all();
            Order::where(['id'=>$id])->update(['status'=>$data['status']]);
            return redirect('/review-order');
        }
        $order=Order::where('id',$id)->first();
        return view('admin/order/status')->with(compact('order'));
    }
}
