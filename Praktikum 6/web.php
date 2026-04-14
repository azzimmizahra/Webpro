<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

// halaman login
Route::get('/login', function () {
    return view('login');
});

// proses login (named route)
Route::post('/auth', [SiteController::class, 'auth'])->name('auth');

// resource controller
Route::resource('products', ProductController::class);