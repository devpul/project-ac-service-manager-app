<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AC\ACController;
use App\Http\Controllers\Auth\AuthController;
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

Route::middleware('auth')->prefix('jenis-dan-tipe-ac')->group(function(){
    Route::get('/', [ACController::class, 'index'])->name('ac.index');
    Route::get('/create', [ACController::class, 'create'])->name('ac.create');
    Route::get('/edit/{id}', [ACController::class, 'edit'])->name('ac.edit');
});
