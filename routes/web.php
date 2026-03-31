<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Portofolio & Cerita Lebaran 2026
|--------------------------------------------------------------------------
*/
Route::get('/tentang', function () { return view('tentang'); })->name('tentang');
// Halaman Utama (Landing Page)
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Galeri Cerita Lebaran
Route::get('/cerita', function () {
    return view('cerita');
})->name('cerita');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');