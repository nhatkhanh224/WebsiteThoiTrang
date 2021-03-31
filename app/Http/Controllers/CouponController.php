<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index(){
        $coupon = Coupon::all();
        return view('admin/coupon/show')->with(compact('coupon'));
    }
}
