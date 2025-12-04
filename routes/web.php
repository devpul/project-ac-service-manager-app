<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/', [AuthController::class, 'storeLogin'])->name('login.store');

Route::middleware('auth')->prefix('dashboard')->group(function() {
    Route::post('/logout', [AuthController::class, 'storeLogout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/', [DashboardController::class, 'store'])->name('dashboard.store');
});

// Route::middleware('auth')->prefix()
