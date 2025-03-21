<?php

use App\Http\Controllers\adminBeritaController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\adminDivisiController;
use App\Http\Controllers\adminPengurusController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Bagian Admin
Route::get('/admin/dashboard', [adminDashboardController::class, 'index'])->name('admin.dashboard');

// Kelola Pengurus
Route::get('/admin/daftar-pengurus', [adminPengurusController::class, 'index'])->name('admin.daftar-pengurus');
Route::get('/admin/tambah-pengurus', [adminPengurusController::class, 'create'])->name('admin.tambah-pengurus');
Route::post('/admin/store-pengurus', [adminPengurusController::class, 'store'])->name('admin.store-pengurus');
Route::get('/admin/edit-pengurus/{id}', [adminPengurusController::class, 'edit'])->name('admin.edit-pengurus');
Route::put('/admin/update-pengurus/{id}', [adminPengurusController::class, 'update'])->name('admin.update-pengurus');
Route::delete('/admin/delete-pengurus/{id}', [adminPengurusController::class, 'destroy'])->name('admin.delete-pengurus');

// Kelola Divisi
Route::get('/admin/daftar-divisi', [adminDivisiController::class, 'index'])->name('admin.daftar-divisi');
Route::get('/admin/tambah-divisi', [adminDivisiController::class, 'create'])->name('admin.tambah-divisi');
Route::post('/admin/store-divisi}', [adminDivisiController::class, 'store'])->name('admin.store-divisi');
Route::get('/admin/edit-divisi/{id}', [adminDivisiController::class, 'edit'])->name('admin.edit-divisi');
Route::put('/admin/update-divisi/{id}', [adminDivisiController::class, 'update'])->name('admin.update-divisi');
Route::delete('/admin/delete-divisi/{id}', [adminDivisiController::class, 'destroy'])->name('admin.delete-divisi');

// Kelola Berita
Route::get('/admin/daftar-berita', [adminBeritaController::class, 'index'])->name('admin.daftar-berita');
Route::get('/admin/tambah-berita', [adminBeritaController::class, 'create'])->name('admin.tambah-berita');
Route::post('/admin/store-berita', [adminBeritaController::class, 'store'])->name('admin.store-berita');
Route::get('/admin/edit-berita/{id}', [adminBeritaController::class, 'edit'])->name('admin.edit-berita');
Route::put('/admin/update-berita/{id}', [adminBeritaController::class, 'update'])->name('admin.update-berita');
Route::delete('/admin/delete-divisi/{id}', [adminBeritaController::class, 'destroy'])->name('admin.delete-berita');
Route::put('admin/publish-berita/{id}', [adminBeritaController::class, 'publish'])->name('admin.publish-berita');
Route::put('admin/draft-berita/{id}', [adminBeritaController::class, 'draft'])->name('admin.draft-berita');
