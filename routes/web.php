<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\TestController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('profile/getprofile', [UserController::class, 'getProfile']);
    Route::post('/profile', [UserController::class, 'createProfile']);
    Route::put('/profile', [UserController::class, 'editProfile']);
    Route::delete('/profile', [UserController::class, 'deleteProfile']);
});

Route::get('/shoppingCart', [ShoppingCartController::class, 'getCart']);
Route::post('/shoppingCart/add', [ShoppingCartController::class, 'addToCart']);
Route::post('/shoppingCart/remove', [ShoppingCartController::class, 'deleteFromCart']);

Route::get('test', [TestController::class, 'index']);

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('checkout/getinfo', [CheckoutController::class, 'getInfo']);
Route::post('checkout', [CheckoutController::class, 'postOrder'])->name('postOrder');


Auth::routes();
