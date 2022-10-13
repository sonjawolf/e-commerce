<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'login']);
Route::post('/login',[UserController::class,'login1']);
Route::get('/p',[ProductController::class,'index']);

Route::get('/detail/{id}',[ProductController::class,'detail']);

Route::post('/add_to_cart',[ProductController::class,'add_to_cart']);
Route::get('/cartlist',[ProductController::class,'cartlist']);
Route::get('/removecart/{id}',[ProductController::class,'removecart']);
Route::get('/ordernow',[ProductController::class,'ordernow']);
Route::post('/orderplace',[ProductController::class,'orderplace']);
Route::get('/myorders',[ProductController::class,'myorders']);


Route::get('/logout',function(){
   Session::forget('user');
   return redirect('/');
});

Route::view('/register','register');
Route::post('/register',[UserController::class,'register']);
