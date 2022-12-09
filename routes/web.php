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
    return view('index');
})->name('index');

Route::get('about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('career', function () {
    return view('career');
})->name('career');

Route::get('product_detail', function(){
   return view('product_detail');
})->name('product_detail');

Route::get('job_post', function(){
    return view('job_post');
})->name('job_post');

Route::get('client', function(){
    return view('clients');
})->name('client');