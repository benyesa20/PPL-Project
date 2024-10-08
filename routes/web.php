<?php

use App\Http\Controllers\Barangcontroller;
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

// Rute untuk dashboard
Route ::get('/dasboard', [App\Http\Controllers\LandingPageController::class,'index']);
// Rute untuk daftar barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// Rute untuk menampilkan form tambah barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Rute untuk menyimpan barang baru
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

// Rute untuk menampilkan form edit barang
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');

// Rute untuk memperbarui barang
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

// Rute untuk menghapus barang
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

// Rute untuk mengelola sumber daya barang
Route::resource('barang', Barangcontroller::class);