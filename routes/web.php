<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Default Home Route
Route::get('/', function () {
    return view('dashboard');
});

// Static Pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authentication Routes
Route::get('auth/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('auth/login', [LoginController::class, 'login']);
Route::post('auth/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('auth/signup', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('auth/signup', [RegisterController::class, 'register']);

// Password Reset Routes (if you're using Laravel's default Auth)
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Menu Routes
Route::resource('/pages', RestaurantController::class);
Route::resource('/menu', MenuController::class);

// Cart Routes
Route::post('/cart/add/{itemId}', [MenuController::class, 'add'])->name('cart.add');
Route::get('/cart', [MenuController::class, 'showCart'])->name('cart.show');
Route::post('/cart/clear', [MenuController::class, 'clearCart'])->name('cart.clear');