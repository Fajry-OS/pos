<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');


// Route::prefix('admin')->middleware(['auth'])->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::resource('penjualan', \App\Http\Controllers\TransactionController::class);


    Route::get('get-products/{category_id}', [\App\Http\Controllers\TransactionController::class, 'getProducts']);
    Route::get('get-product/{product_id}', [\App\Http\Controllers\TransactionController::class, 'getProduct']);
    Route::get('print/{id}', [\App\Http\Controllers\TransactionController::class, 'print']);
});
