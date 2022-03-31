<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use Illuminate\Routing\Router;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, 'index'])->name('dashboard');

Route::get('/orders', [OrderController::class, 'index'])->name('admin-orders');
Route::get('/orders/{order}', [OrderController::class, 'order']);
Route::put('/orders/{order}', [OrderController::class, 'changeOrderStatus'])->name('change-status');

Route::get('/products', [ProductController::class, 'index'])->name('admin-products');

Route::get('/users', [AdminUserController::class, 'index'])->name('admin-users');
Route::get('/users/{user}', [AdminUserController::class, 'user']);
Route::put('/users/{user}', [AdminUserController::class, 'updateUser']);
Route::delete('/users/{user}', [AdminUserController::class, 'deleteUser']);
