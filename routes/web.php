<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// view route
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.home');
// search
Route::get('/pegawai/cari', [PegawaiController::class, 'cari'])->name('pegawai.cari');
// tambah view
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'])->name('pegawai.tambah');
// edit view
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');

Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'])->name('pegawai.hapus');

// function route
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::post('/pegawai/update/', [PegawaiController::class, 'update'])->name('pegawai.update');

// dd(Route::post('/pegawai/update/', [PegawaiController::class, 'update']));


