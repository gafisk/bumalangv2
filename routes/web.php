<?php

use App\Http\Controllers\adminBeritaController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\adminDivisiController;
use App\Http\Controllers\adminFooterController;
use App\Http\Controllers\adminPengurusController;
use App\Http\Controllers\adminUniversitasController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


// Bagian Admin
Route::prefix('administrator')->group(function () {
    Route::get('/', [adminDashboardController::class, 'index'])->name('admin.dashboard');

    // Kelola Pengurus
    Route::prefix('pengurus')->group(function () {
        Route::get('/', [adminPengurusController::class, 'index'])->name('admin.daftar-pengurus');
        Route::get('/tambah', [adminPengurusController::class, 'create'])->name('admin.tambah-pengurus');
        Route::post('/store', [adminPengurusController::class, 'store'])->name('admin.store-pengurus');
        Route::get('/edit/{id}', [adminPengurusController::class, 'edit'])->name('admin.edit-pengurus');
        Route::put('/update/{id}', [adminPengurusController::class, 'update'])->name('admin.update-pengurus');
        Route::delete('/delete/{id}', [adminPengurusController::class, 'destroy'])->name('admin.delete-pengurus');
    });

    // Kelola Divisi
    Route::prefix('divisi')->group(function () {
        Route::get('/', [adminDivisiController::class, 'index'])->name('admin.daftar-divisi');
        Route::get('/tambah', [adminDivisiController::class, 'create'])->name('admin.tambah-divisi');
        Route::post('/store', [adminDivisiController::class, 'store'])->name('admin.store-divisi');
        Route::get('/edit/{id}', [adminDivisiController::class, 'edit'])->name('admin.edit-divisi');
        Route::put('/update/{id}', [adminDivisiController::class, 'update'])->name('admin.update-divisi');
        Route::delete('/delete/{id}', [adminDivisiController::class, 'destroy'])->name('admin.delete-divisi');
    });

    // Kelola Berita
    Route::prefix('berita')->group(function () {
        Route::get('/', [adminBeritaController::class, 'index'])->name('admin.daftar-berita');
        Route::get('/tambah', [adminBeritaController::class, 'create'])->name('admin.tambah-berita');
        Route::post('/store', [adminBeritaController::class, 'store'])->name('admin.store-berita');
        Route::get('/edit/{id}', [adminBeritaController::class, 'edit'])->name('admin.edit-berita');
        Route::put('/update/{id}', [adminBeritaController::class, 'update'])->name('admin.update-berita');
        Route::delete('/delete/{id}', [adminBeritaController::class, 'destroy'])->name('admin.delete-berita');
        Route::put('/publish/{id}', [adminBeritaController::class, 'publish'])->name('admin.publish-berita');
        Route::put('/draft/{id}', [adminBeritaController::class, 'draft'])->name('admin.draft-berita');
    });

    // Kelola Footer
    Route::prefix('footer')->group(function () {
        Route::get('/', [adminFooterController::class, 'index'])->name('admin.daftar-footer');
        Route::get('/tambah', [adminFooterController::class, 'create'])->name('admin.tambah-footer');
        Route::post('/store', [adminFooterController::class, 'store'])->name('admin.store-footer');
        Route::get('/edit/{id}', [adminFooterController::class, 'edit'])->name('admin.edit-footer');
        Route::put('/update/{id}', [adminFooterController::class, 'update'])->name('admin.update-footer');
        Route::delete('/delete/{id}', [adminFooterController::class, 'destroy'])->name('admin.delete-footer');
    });

    // Kelola Universitas
    Route::prefix('universitas')->group(function () {
        Route::get('/', [adminUniversitasController::class, 'index'])->name('admin.daftar-universitas');
        Route::get('/tambah', [adminUniversitasController::class, 'create'])->name('admin.tambah-universitas');
        Route::post('/store', [adminUniversitasController::class, 'store'])->name('admin.store-universitas');
        Route::get('/edit/{id}', [adminUniversitasController::class, 'edit'])->name('admin.edit-universitas');
        Route::put('/update/{id}', [adminUniversitasController::class, 'update'])->name('admin.update-universitas');
        Route::delete('/delete/{id}', [adminUniversitasController::class, 'destroy'])->name('admin.delete-universitas');
    });
});
