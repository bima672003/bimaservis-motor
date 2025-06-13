<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiServisController;
use App\Http\Controllers\PekerjaanServisController;
use App\Http\Controllers\ImageController;  

Route::resource('antrian', AntrianController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('kendaraans', KendaraanController::class);
Route::resource('transaksi_servis', TransaksiServisController::class);
Route::resource('pekerjaan_servis', PekerjaanServisController::class);
Route::resource('kendaraan', KendaraanController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran-ktp', function () {
    return 'Selamat datang di halaman Pendaftaran KTP Online';
})->middleware('check.age');

 Route::get('/upload', [ImageController::class, 'create']);
 Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
