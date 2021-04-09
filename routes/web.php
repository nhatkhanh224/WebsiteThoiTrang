<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\CheckLogin;
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

Route::group(['middleware' => ['checkLogin']], function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    //CATEGORY
    Route::get('/category', [CategoryController::class, 'index']);
    Route::match(['get', 'post'],'/category/insert', [CategoryController::class, 'insert']);
    Route::match(['get', 'post'],'/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::match(['get', 'post'],'/category/delete/{id}', [CategoryController::class, 'delete']);

    //PRODUCT
    Route::get('/products', [ProductController::class, 'index']);
    Route::match(['get', 'post'],'/product/insert', [ProductController::class, 'insert']);
    Route::match(['get', 'post'],'/product/edit/{id}', [ProductController::class, 'edit']);
    Route::match(['get', 'post'],'/product/delete/{id}', [ProductController::class, 'delete']);
    Route::match(['get', 'post'],'/product/insert-image/{id}', [ProductController::class, 'insert_image']);
    Route::match(['get', 'post'],'/product/image/delete/{id}', [ProductController::class, 'delete_product_image']);
    Route::get('/products/trash', [ProductController::class, 'trash']);
    Route::match(['get', 'post'],'/product/restore/{id}', [ProductController::class, 'restore']);
    Route::match(['get', 'post'],'/product/destroy/{id}', [ProductController::class, 'destroy']);

    //COUPON
    Route::get('/coupon', [CouponController::class, 'index']);
    Route::match(['get', 'post'],'/coupon/insert', [CouponController::class, 'insert']);
    Route::match(['get', 'post'],'/coupon/edit/{id}', [CouponController::class, 'edit']);
    Route::match(['get', 'post'],'/coupon/delete/{id}', [CouponController::class, 'delete']);
    //ORDER
    Route::get('/review-order', [OrderController::class, 'index']);
    Route::get('/review-order/detail/{id}', [OrderController::class, 'detail']);
    Route::match(['get', 'post'],'/review-order/status/{id}', [OrderController::class, 'setStatus']);

    
});


//Web
Route::get('/',[HomeController::class,'index']);
Route::get('/category/{slug}',[HomeController::class,'productByCategory']);
Route::get('/product/{slug}',[HomeController::class,'detail']);
Route::match(['get', 'post'],'/addToCart', [CartController::class, 'addToCart']);
Route::match(['get', 'post'],'/cart', [CartController::class, 'index']);
Route::match(['get', 'post'],'/cart/update/{id}/{number}', [CartController::class, 'updateQuantity']);
Route::match(['get', 'post'],'/cart/delete/{id}', [CartController::class, 'deleteCart']);
Route::match(['get', 'post'],'/payment', [CartController::class, 'payment']);
Route::post('/useCoupon',[CartController::class,'useCoupon']);
Route::match(['get', 'post'],'/order', [CartController::class, 'order']);
Route::get('/history-order',[HomeController::class,'history']);
Route::post('/search-product',[HomeController::class,'search']);
//Account
Route::get('/account',[UserController::class,'index']);
Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
Route::get('/logout',[UserController::class,'logout']);



