<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanphamController;
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
//route client
Route::get('/',[SanphamController::class,'index']);
Route::get('/product/{id}',[sanpham::class,'chitiet']);