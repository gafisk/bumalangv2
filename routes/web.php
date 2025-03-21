<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\adminDivisiController;
use App\Http\Controllers\adminPengurusController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Bagian Admin
Route::get('/admin/dashboard', [adminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/daftar-pengurus', [adminPengurusController::class, 'index'])->name('admin.daftar-pengurus');
Route::get('/admin/tambah-pengurus', [adminPengurusController::class, 'create'])->name('admin.tambah-pengurus');
Route::post('/admin/store-pengurus', [adminPengurusController::class, 'store'])->name('admin.store-pengurus');
Route::get('/admin/edit-pengurus/{id}', [adminPengurusController::class, 'edit'])->name('admin.edit-pengurus');
Route::put('/admin/update-pengurus/{id}', [adminPengurusController::class, 'update'])->name('admin.update-pengurus');
Route::delete('/admin/delete-pengurus/{id}', [adminPengurusController::class, 'destroy'])->name('admin.delete-pengurus');

route::get('admin/daftar-divisi', [adminDivisiController::class, 'index'])->name('admin.daftar-divisi');
route::get('admin/tambah-divisi', [adminDivisiController::class, 'create'])->name('admin.tambah-divisi');
Route::post('/admin/store-divisi}', [adminDivisiController::class, 'store'])->name('admin.store-divisi');
Route::get('/admin/edit-divisi/{id}', [adminDivisiController::class, 'edit'])->name('admin.edit-divisi');
Route::put('/admin/update-divisi/{id}', [adminDivisiController::class, 'update'])->name('admin.update-divisi');
Route::delete('/admin/delete-divisi/{id}', [adminDivisiController::class, 'destroy'])->name('admin.delete-divisi');
