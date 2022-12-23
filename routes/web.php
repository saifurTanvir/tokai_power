<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('product_detail/{product}', [HomeController::class, 'product_detail'])->name('product_detail');
Route::get('service/detail/{service}', [HomeController::class, 'service_detail'])->name('service_detail');
Route::get('about_us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('client', [HomeController::class, 'client'])->name('client');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('job_detail/{job}', [HomeController::class, 'job_detail'])->name('job_detail');
Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

