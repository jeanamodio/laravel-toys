<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ToyController;



Route::resource('/', ToyController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::resource('brands', BrandController::class);
Route::resource('categories', CategoryController::class);
Route::resource('toys', ToyController::class);




require __DIR__.'/auth.php';
