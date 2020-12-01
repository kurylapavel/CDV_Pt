<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db',[App\Http\Controllers\cdv::class,'index']);

Route::get('/user',[App\Http\Controllers\User::class,'index']);

Route::get('/showdb',[App\Http\Controllers\cdv1::class,'show']);

Route::get('/zddb',[App\Http\Controllers\zddb::class,'show']);