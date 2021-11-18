<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Hall
Route::get("/halls",[\App\Http\Controllers\Api\HallController::class,"allHall"]);
Route::get("/single-hall/{alias}",[\App\Http\Controllers\Api\HallController::class,"singleHall"]);
//Tour
Route::get("/tours/{hall_id}",[\App\Http\Controllers\Api\TourController::class,"tours"]);
Route::get("/single-tour/{alias}",[\App\Http\Controllers\Api\TourController::class,"singleTour"]);
//ThirdModel
Route::get("/thirdModels/{hall_id}",[\App\Http\Controllers\Api\ThirdModelController::class,"thirdModels"]);
Route::get("/single-thirdModel/{alias}",[\App\Http\Controllers\Api\ThirdModelController::class,"singlethirdModel"]);
Route::get("/single-showcaseThirdModel/{showcase_id}",[\App\Http\Controllers\Api\ThirdModelController::class,"singleShowCase"]);
//Showcase
Route::get("/showcases/{alias}",[\App\Http\Controllers\Api\ShowcaseController::class,"singleShowCase"]);



//News
Route::get("/news",[\App\Http\Controllers\Api\NewsController::class,"news"]);
Route::get("/stocks",[\App\Http\Controllers\Api\NewsController::class,"stock"]);
Route::get("/single-news/{alias}",[\App\Http\Controllers\Api\NewsController::class,"singleNews"]);
//About
Route::get("/about",[\App\Http\Controllers\Api\AboutController::class,"index"]);
//F.A.Q
Route::get("/faq",[\App\Http\Controllers\Api\FaqController::class,"index"]);





Route::resource('third_models', App\Http\Controllers\API\ThirdModelAPIController::class);
