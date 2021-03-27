<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('account.index');
    }
    public function login(Request $request){
        $data=$request->all();
        
        if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])) {
            return redirect('/');
        }
        else {
            return redirect()->back();
        }
        
    }
    public function register(Request $request){
        if ($request->isMethod('POST')) {
            $data=$request->all();
            $user=new User();
            $surname=$data['surname'] ;
            $user->name=$data['name']." ".$surname;
            $email=User::where('email',$data['email'])->count();
            if ($email>0) {
                $errText="Email đã được sử dụng";
                return redirect()->back();
            }
            else {
                $user->email=$data['email'];
            }
            
            $user->address=$data['address'];
            $user->phone=$data['phone'];
            $user->password=bcrypt($data['password']);
            $user->admin=0;
            $user->save();
            return redirect('/');
        }
        
    }
    public function logout(){
        Auth::logout();
        Cookie::queue(Cookie::forget('cart'));
        return redirect('/');
    }
}
