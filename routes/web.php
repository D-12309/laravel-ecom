<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\CategoryController;
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
});






