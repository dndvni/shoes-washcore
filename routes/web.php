<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelayananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelayanan', [PelayananController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/user/tambah_simpan', [PegawaiController::class, 'tambah_simpan']);
// Route::get('/pegawai/ubah/{id}', [PegawaiController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [PegawaiController::class, 'ubah_simpan']);
