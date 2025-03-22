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
Route::get('/administrator', [adminDashboardController::class, 'index'])->name('admin.dashboard');

// Kelola Pengurus
Route::get('/administrator/daftar-pengurus', [adminPengurusController::class, 'index'])->name('admin.daftar-pengurus');
Route::get('/administrator/tambah-pengurus', [adminPengurusController::class, 'create'])->name('admin.tambah-pengurus');
Route::post('/administrator/store-pengurus', [adminPengurusController::class, 'store'])->name('admin.store-pengurus');
Route::get('/administrator/edit-pengurus/{id}', [adminPengurusController::class, 'edit'])->name('admin.edit-pengurus');
Route::put('/administrator/update-pengurus/{id}', [adminPengurusController::class, 'update'])->name('admin.update-pengurus');
Route::delete('/administrator/delete-pengurus/{id}', [adminPengurusController::class, 'destroy'])->name('admin.delete-pengurus');

// Kelola Divisi
Route::get('/administrator/daftar-divisi', [adminDivisiController::class, 'index'])->name('admin.daftar-divisi');
Route::get('/administrator/tambah-divisi', [adminDivisiController::class, 'create'])->name('admin.tambah-divisi');
Route::post('/administrator/store-divisi}', [adminDivisiController::class, 'store'])->name('admin.store-divisi');
Route::get('/administrator/edit-divisi/{id}', [adminDivisiController::class, 'edit'])->name('admin.edit-divisi');
Route::put('/administrator/update-divisi/{id}', [adminDivisiController::class, 'update'])->name('admin.update-divisi');
Route::delete('/administrator/delete-divisi/{id}', [AdminDivisiController::class, 'destroy'])->name('admin.delete-divisi');


// Kelola Berita
Route::get('/administrator/daftar-berita', [adminBeritaController::class, 'index'])->name('admin.daftar-berita');
Route::get('/administrator/tambah-berita', [adminBeritaController::class, 'create'])->name('admin.tambah-berita');
Route::post('/administrator/store-berita', [adminBeritaController::class, 'store'])->name('admin.store-berita');
Route::get('/administrator/edit-berita/{id}', [adminBeritaController::class, 'edit'])->name('admin.edit-berita');
Route::put('/administrator/update-berita/{id}', [adminBeritaController::class, 'update'])->name('admin.update-berita');
Route::delete('/administrator/delete-berita/{id}', [adminBeritaController::class, 'destroy'])->name('admin.delete-berita');
Route::put('/administrator/publish-berita/{id}', [adminBeritaController::class, 'publish'])->name('admin.publish-berita');
Route::put('/administrator/draft-berita/{id}', [adminBeritaController::class, 'draft'])->name('admin.draft-berita');
