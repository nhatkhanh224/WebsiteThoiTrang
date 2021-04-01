<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use Carbon\Carbon;
class CouponController extends Controller
{
    public function index(){
        $coupon = Coupon::all();
        return view('admin/coupon/show')->with(compact('coupon'));
    }
    public function insert(Request $request){
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $coupon=new Coupon;
            $coupon->coupon_name=$data['coupon_name'];
            $coupon->money=$data['money'];
            $coupon->type=$data['type'];
            $coupon->expiry_date=$data['expiry_date'];
            $coupon->start_date=$data['start_date'];
            $coupon->save();
            return redirect('/coupon');
        }
        return view('admin/coupon/insert');
    }
    public function edit(Request $request,$id=null){
        if ($request->isMethod('POST')) {
            $data = $request->all();
            Coupon::where(['id'=>$id])->update(['coupon_name'=>$data['coupon_name'],'money'=>$data['money'],'type'=>$data['type'],'start_date'=>$data['start_date'],'expiry_date'=>$data['expiry_date']]);
            return redirect('/coupon');
        }
        $oldCoupon = Coupon::where(['id'=>$id])->first();
        $start_date = Carbon::parse($oldCoupon->start_date)->format('Y-m-d');
        $expiry_date = Carbon::parse($oldCoupon->expiry_date)->format('Y-m-d');
        return view('admin/coupon/edit')->with(compact('oldCoupon','start_date','expiry_date'));
    }
    public function delete($id=null){
        if (!empty($id)) {
            Coupon::where(['id'=>$id])->delete();
            return redirect('/coupon');
        }
    }
}
