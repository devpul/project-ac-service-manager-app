<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [AuthController::class, 'indexLogin'])->name('login.index');
Route::post('/', [AuthController::class, 'storeLogin'])->name('login.store');

Route::middleware('auth')->prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});
