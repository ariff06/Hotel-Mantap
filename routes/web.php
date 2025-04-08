<?php

use App\Http\Controllers\{
    ReservationController,
    AdminController,
};
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route untuk login admin
Route::view('admin/login', 'auth.login')->name('admin.login');
Route::post('admin/login', function () {
    return view('auth.login');
})->name('admin.index');

// Route default login (diperlukan oleh middleware auth)
Route::get('login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Route untuk halaman login resep
Route::view('resep/login', 'auth.login')->name('resep.login');

// Route untuk reservasi
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::patch('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');

// Route untuk Admin
Route::prefix('admin')->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');
    
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');

    // Route untuk Rooms
    Route::prefix('rooms')->group(function () {
        Route::get('/', [AdminController::class, 'rooms'])->name('admin.rooms');
        Route::post('/store', [AdminController::class, 'storeRoom'])->name('admin.rooms.store');
        Route::get('/{id}/edit', [AdminController::class, 'editRoom'])->name('admin.rooms.edit');
        Route::post('/{id}', [AdminController::class, 'updateRoom'])->name('admin.rooms.update');
        Route::delete('/destroy/{id}', [AdminController::class, 'destroyRoom'])->name('admin.rooms.destroy');
    });

    // Route untuk Facilities
    Route::prefix('facilities')->group(function () {
        Route::get('/', [AdminController::class, 'facilities'])->name('admin.facilitas');
        Route::post('/store', [AdminController::class, 'storeFacility'])->name('admin.facilities.store');
        Route::get('/{id}/edit', [AdminController::class, 'editFacility'])->name('admin.facilities.edit');
        Route::post('/{id}', [AdminController::class, 'updateFacility'])->name('admin.facilities.update');
        Route::delete('/destroy/{id}', [AdminController::class, 'destroyFacility'])->name('admin.facilities.destroy');
    });

    // Halaman fasilitas kamar
    Route::view('facilities_room', 'admin.facilities_room')->name('admin.facilities_room');
});

// Route untuk Resep (dengan middleware auth)
Route::prefix('resep')->middleware(['auth'])->group(function () {
    Route::get('/', [ReservationController::class, 'index'])->name('resep.index');
    Route::get('/order', [ReservationController::class, 'order'])->name('resep.order');
});

// Route tambahan untuk Resep (tanpa middleware)
Route::get('/resep', [ReservationController::class, 'index'])->name('resep.index');
Route::get('/resep/order', [ReservationController::class, 'order'])->name('resep.order');
