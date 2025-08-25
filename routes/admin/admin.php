<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;


// Controller Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\FiturController;
use App\Http\Controllers\Admin\TentangController;








// Route Admin



Route::get( '/admin', [AdminController::class, 'index']);



Route::resource('admin/berita', BeritaController::class); 
Route::resource('admin/guru', GuruController::class); 
Route::resource('admin/kontak', KontakController::class);
Route::resource('admin/fitur', FiturController::class);
Route::resource('admin/tentang', TentangController::class);


// ... existing routes ...



// ... existing routes ...



// Tambahkan route untuk menangani trailing slash
//Route::get('/berita', [BeritaController::class, 'index']);