<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route ke 1 -------  1

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route untuk login admin
Route::post('admin/login', function () {
    return view('auth.login');
})->name('admin.login');

// Route default login (diperlukan oleh middleware `auth`)
Route::get('login', function () {
    return redirect()->route('admin.login'); // Redirect ke login admin
})->name('login');

// Route untuk halaman login admin
Route::view('admin/login', 'auth.login')->name('admin.login');

// Route untuk halaman login resep
Route::view('resep/login', 'auth.login')->name('resep.login');

// Group route untuk admin dengan middleware autentikasi
Route::group([
    'prefix' => 'admin', // Prefix URL untuk route admin
    // 'middleware' => ['auth'], // Middleware untuk autentikasi
], function () {
    // Dashboard admin
    Route::view('/', 'dashboard')->name('dashboard');
    // Halaman manajemen user admin
    Route::view('admin', 'admin.index')->name('admin.index');
    //Halaman manage kamar
    Route::view('rooms', 'admin.rooms')->name('admin.rooms');
    //Halaman manage fasilitas
    Route::view('facilitas', 'admin.facilitas')->name('admin.facilitas');
});

Route::group([
    'prefix' => 'resep',
], function () {
    // Dashboard resepsionis
    Route::view('/', 'resep.index')->name('resep.index');
    // Orders resepsionis
    Route::view('order', 'resep.order')->name('resep.order');
});