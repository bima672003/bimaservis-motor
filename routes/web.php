<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiServisController;
use App\Http\Controllers\PekerjaanServisController;


Route::resource('antrian', AntrianController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('kendaraans', KendaraanController::class);
Route::resource('transaksi_servis', TransaksiServisController::class);
Route::resource('pekerjaan_servis', PekerjaanServisController::class);
Route::resource('kendaraan', KendaraanController::class);

Route::get('/', function () {
    return view('welcome');
});