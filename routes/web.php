<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/getproducts', [HomeController::class, 'getproducts']);

Route::get('/product/{product}', [ProductController::class, 'index'])->name('product');
Route::get('/product/{product}/getproduct', [ProductController::class, 'getProduct']);

Route::get('/profile', [UserController::class, 'index'])->middleware('auth');
Route::post('/profile', [UserController::class, 'createProfile'])->middleware('auth');
Route::put('/profile', [UserController::class, 'editProfile'])->middleware('auth');

Route::get('profile/getprofile', [UserController::class, 'getProfile'])->middleware('auth');



Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::get('logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');
});

Auth::routes();
