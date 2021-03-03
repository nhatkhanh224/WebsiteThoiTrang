<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $student=Student::all();
        return view('student/show')->with(compact('student'));
    }
}
