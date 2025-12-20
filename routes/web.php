<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Toko\TokoController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::prefix('/register')->group(function() {
    Route::get('/', [AuthController::class, 'indexRegister'])->name('register');
    Route::post('/', [AuthController::class, 'storeRegister'])->name('register.store');
});

Route::get('/', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/', [AuthController::class, 'storeLogin'])->name('login.store');

Route::middleware('auth')->prefix('dashboard')->group(function() {
    Route::post('/logout', [AuthController::class, 'storeLogout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/', [DashboardController::class, 'store'])->name('dashboard.store');
});

Route::middleware('auth')->prefix('toko')->group(function(){
    Route::get('/', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/create', [TokoController::class, 'create'])->name('toko.create');
    Route::get('/edit{id}', [TokoController::class, 'edit'])->name('toko.edit');
    Route::get('/download/pdf', [TokoController::class, 'download'])->name('toko.download');
});
