<?php

use App\Http\Controllers\InstrumentController;

// Halaman Home / Beranda yang keren
Route::get('/', [InstrumentController::class, 'home'])->name('home');

// Halaman Katalog Produk Lengkap
Route::get('/products', [InstrumentController::class, 'index'])->name('products');

// Halaman Detail Produk
Route::get('/instrument/{id}', [InstrumentController::class, 'show'])->name('instrument.show');

// Halaman Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Halaman Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');