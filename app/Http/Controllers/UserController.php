<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class UserController extends Controller
{
    public function index(){
        return view('account.index');
    }
    public function login(Request $request){
        $data=$request->all();
        
        if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])) {
            return redirect('/');
        }
        else {
            return redirect()->back();
        }
        
    }
    public function logout(){
        Auth::logout();
        Cookie::queue(Cookie::forget('cart'));
        return redirect('/');
    }
}
