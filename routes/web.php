<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OfferController;
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
Route::get('sendSMS', [\App\Http\Controllers\TwilioSMSController::class, 'index']);



Route::group( ['prefix' => 'admin'], function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::group( ['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/manage_category', [CategoryController::class, 'manage_category']);
        Route::post('/manage_category_process', [CategoryController::class, 'manage_category_process'])->name('category.manage_category_process');
        Route::get('/manage_category/{id}', [CategoryController::class, 'manage_category']);
        Route::get('/delete/{id}', [CategoryController::class, 'delete']);
    });

    Route::group( ['prefix' => 'brands'], function () {
        Route::get('/', [BrandController::class, 'index']);
        Route::get('/manage_brand', [BrandController::class, 'manage_brand']);
        Route::post('/manage_brand_process', [BrandController::class, 'manage_brand_process'])->name('brand.manage_brand_process');
        Route::get('/manage_brand/{id}', [BrandController::class, 'manage_brand']);
        Route::get('/delete/{id}', [BrandController::class, 'delete']);
    });

    Route::group( ['prefix' => 'offers'], function () {
        Route::get('/', [OfferController::class, 'index']);
        Route::get('/manage_offer', [OfferController::class, 'manage_offer']);
        Route::post('/manage_offer_process', [OfferController::class, 'manage_offer_process'])->name('offer.manage_offer_process');
        Route::get('/manage_offer/{id}', [OfferController::class, 'manage_offer']);
        Route::get('/delete/{id}', [OfferController::class, 'delete']);
    });
});






