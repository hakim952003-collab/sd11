<?php

use Illuminate\Support\Facades\Route;

// Controller Client
use App\Http\Controllers\Client\BeritaController;
use App\Http\Controllers\Client\BerandaController;
use App\Http\Controllers\Client\GuruController;
use App\Http\Controllers\Client\TentangController;
use App\Http\Controllers\Client\KontakController;


// Controller Admin



//Route::get('/', function () {
 //   return view('beranda');
//});


// Route Client

Route::get('/profil', function () {
    return view('front.profil');
});

Route::get('/content', function () {
    return view('front.content');
});

Route::get('/visimisi', function () {
    return view('front.visimisi');
});

Route::get('/struktur', function () {
    return view('front.struktur');
});

Route::get('/video', function () {
    return view('front.video');
});



Route::resource('/berita', BeritaController::class);

Route::resource('/guru', GuruController::class);

Route::resource('/tentang', TentangController::class);

Route::resource('/kontak', KontakController::class);


Route::get('/', [BerandaController::class, 'index']);






include"admin/admin.php";