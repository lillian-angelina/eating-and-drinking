<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/likes/{restaurant}', [LikeController::class, 'toggle'])->name('likes.toggle');
Route::post('/reservations', [ProductController::class, 'store'])->name('reservations.store');
Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
Route::get('/components/menu', [UserController::class, 'menu'])->name('menu');