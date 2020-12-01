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

Route::get('wykres',[App\Http\Controllers\wykres::class,'wykres']);

Route::get('/register', function () {
    return view('registerUser');
});

Route::post('/reg',[App\Http\Controllers\Register::class,'add']);