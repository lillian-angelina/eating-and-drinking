<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/restaurants/search', [ProductController::class, 'search'])->name('restaurants.search');
Route::get('/restaurants/{restaurant}', [ProductController::class, 'show'])->name('restaurants.show');
Route::post('/likes/{restaurant}', [LikeController::class, 'toggle'])->name('likes.toggle');
Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
Route::delete('/reservations/{reservation}', [ProductController::class, 'destroy'])->name('reservations.destroy');
Route::get('/components/menu', [UserController::class, 'menu'])->name('menu');

Route::middleware('auth')->group(function () {
    Route::post('/restaurants/{restaurant}/like', [LikeController::class, 'toggle'])->name('restaurants.like');
    Route::post('/reservations', [ProductController::class, 'store'])->name('reservations.store');
});