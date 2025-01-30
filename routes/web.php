<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController; // ✅ Import added

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

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Menu Routes
Route::resource('/pages', RestaurantController::class);
Route::resource('/menu', MenuController::class);

// Cart Routes
Route::get('cart', [MenuController::class, 'cart'])->name('cart'); 
Route::post('/cart/add/{itemId}', [MenuController::class, 'add'])->name('cart.add');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');