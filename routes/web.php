<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\UserController;
use App\Models\storage;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Route::get('/', function () {
    //     return view('layout.index');
    // });


    Route::middleware(['auth', 'CheckRole:admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/dashboard', [UserController::class, 'index'])->name('admin.index');
            Route::resource('/storage', StorageController::class);
            Route::get('/management/rak', [StorageController::class, 'indexstorage'])->name('storage.indexstorage');
            Route::resource('/user', UserController::class);
            Route::get('/management/user', [UserController::class, 'indexUser'])->name('user.indexuser');
            Route::resource('/barang', BarangController::class);
            Route::post('/barang/ambil', [BarangController::class, 'ambil_barang'])->name('barang.ambil');
            Route::resource('/user', UserController::class);
            Route::get('/admin/user/{id}/qrcode', [UserController::class, 'downloadQrCode'])->name('user.qrcode');
        });
    });

    Route::middleware(['auth', 'CheckRole:user'])->group(function () {
        Route::prefix('user')->group(function () {
            Route::resource('/customer', dashboardController::class);
        });
    });
});
