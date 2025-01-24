<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::resource('/pages', RestaurantController::class);
Route::resource('/menu', MenuController::class);