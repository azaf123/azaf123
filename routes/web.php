<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// panggil index
// Route::get('/', function () {
//     return view('dashboard/index');
// });

// category
// Route::get('/category',[CategoryController::class, 'index']);
// Route::get('/category/create',[CategoryController::class, 'create']);
// Route::post('/category',[CategoryController::class, 'store']);
// Route::delete('/category/{category}',[CategoryController::class, 'destroy']);
// Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
// Route::patch('/category/{category}',[CategoryController::class, 'update']);
// Route::group(['middleware'=>'auth'],function(){
//     Route::resource('category', CategoryController::class);
// });

// product
// Route::get('/product',[ProductController::class, 'index']);
// Route::get('/product/create',[ProductController::class, 'create']);
// Route::post('/product',[ProductController::class,'store']);

//Admin
Route::group(['middleware'=>['auth','admin']],function(){
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('paymentmethod', PaymentMethodController::class);
    Route::resource('courier', CourierController::class);
    Route::resource('cart', CartController::class);
    Route::resource('transaction', TransactionController::class);
});

//landingpage
Route::resource('home', LandingController::class);

Route::group(['middleware'=>['authuser','user']],function(){
// (/keranjang = url), ('keranjang' = fungsi di controller)
Route::get('/keranjang',[LandingController::class,'keranjang']);
Route::post('/keranjang', [LandingController::class,'keranjang_store']);
});


// login dan register admin
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login' ,[AuthController::class,'login_store']);
Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'register_store']);
Route::get('/logout',[AuthController::class,'logout']);

// login dan register user
Route::get('/loginuser',[UserController::class,'login'])->name('loginuser');
Route::post('/loginuser',[UserController::class,'login_store']);
Route::get('/registeruser',[UserController::class,'register']);
Route::post('/registeruser',[UserController::class,'register_store']);
Route::get('/logoutuser',[UserController::class,'logout']);