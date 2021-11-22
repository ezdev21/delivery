<?php

use App\Events\MessageSent;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserContrller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat',[ChatController::class,'index']);
Route::post('chat/test',function(Request $request){
  event(new MessageSent(1,$request->text,1));
});

Route::prefix('category')->group(function(){
  Route::get('index',[CategoryController::class,'index']);
});

Route::prefix('product')->group(function(){
  Route::get('create',[ProductController::class,'create']);
  Route::post('store',[ProductController::class,'store']);
  Route::get('edit/{id}',[ProductController::class,'edit']);
  Route::patch('update',[ProductController::class,'update']);
  Route::get('show/{id}',[ProductController::class,'show'])->name('product.show');
  Route::post('search',[ProductController::class,'search'])->name('product.search');
});

Route::prefix('cart')->group(function(){
  Route::get('cartitems',[CartController::class,'cartItems']);
});

Route::prefix('customer')->group(function(){
  Route::post('search',[CustomerController::class,'search']);
});

Route::prefix('vendor')->group(function(){
  Route::post('search',[VendorController::class,'search']);
});

Route::prefix('order')->group(function(){
  Route::post('search',[OrderController::class,'search']);
});

Route::prefix('admin')->group(function(){
  Route::get('/',[AdminController::class,'']);
});

Route::prefix('user')->group(function(){
  Route::get('notifications',[UserController::class,'notifications']);
});