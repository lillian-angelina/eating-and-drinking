<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');