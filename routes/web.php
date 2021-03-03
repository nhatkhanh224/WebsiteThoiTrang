<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::match(['get', 'post'],'/category/insert', [CategoryController::class, 'insert']);
Route::match(['get', 'post'],'/category/edit/{id}', [CategoryController::class, 'edit']);
Route::match(['get', 'post'],'/category/delete/{id}', [CategoryController::class, 'delete']);

