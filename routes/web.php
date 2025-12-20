<?php

use App\Http\Controllers\Kalender\KalenderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AC\ACController;
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

Route::middleware('auth')->prefix('jenis-dan-tipe-ac')->group(function(){
    Route::get('/', [ACController::class, 'index'])->name('ac.index');
    Route::get('/create', [ACController::class, 'create'])->name('ac.create');
    Route::get('/edit/{id}', [ACController::class, 'edit'])->name('ac.edit');
});
Route::middleware('auth')->prefix('toko')->group(function(){
    Route::get('/', [TokoController::class, 'index'])->name('toko.index');
    Route::get('/create', [TokoController::class, 'create'])->name('toko.create');
    Route::get('/edit{id}', [TokoController::class, 'edit'])->name('toko.edit');
    Route::put('/update/{id}', [TokoController::class, 'update'])->name('toko.update');
    Route::get('/export/pdf', [TokoController::class, 'exportPdf'])->name('toko.export_pdf');
    Route::get('/export/excel', [TokoController::class, 'exportExcel'])->name('toko.export_excel');
    Route::post('/import/excel', [TokoController::class, 'importExcel'])->name('toko.import_excel');
    Route::delete('/destroy/{id}', [TokoController::class, 'destroy'])->name('toko.destroy');
});

Route::middleware('auth')->prefix('kalender')->group(function(){
    Route::get('/', [KalenderController::class, 'view'])->name('kalender.view');
    Route::get('/api/meetings', [KalenderController::class, 'index'])->name('kalender.index');
});

