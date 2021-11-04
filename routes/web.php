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
    return \Illuminate\Support\Facades\Auth::check() ? redirect(\route("home")) : redirect(\route("login"));
});

Auth::routes(["register"=>false]);

Route::group(["middleware"=>"admin"],function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('halls', App\Http\Controllers\HallController::class);
Route::resource('tours', App\Http\Controllers\TourController::class);
Route::resource('thirdModels', App\Http\Controllers\ThirdModelController::class);
Route::resource('news', App\Http\Controllers\NewsController::class);
Route::resource('abouts', App\Http\Controllers\AboutController::class);
Route::resource('fAQS', App\Http\Controllers\FAQController::class);
Route::resource('galleries', App\Http\Controllers\GalleryController::class);
});

