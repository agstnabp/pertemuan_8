<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MencobaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\GudangBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', function () {
    return view('about', [
        "name" => "Nama: agustina",
        "email" => "Email: agustinna137@gmail.com",
        "sex" => "Jenis kelamin: Perempuan",
        "address" => "Alamat: Condongcatur",
    ]);
});

Route::get('/tentang', function () {
    return view('about2');
});

Route::get('/boom', [MencobaController::class, 'boomesport']);
Route::get('/prx', [MencobaController::class, 'prxesport']);
Route::get('/fnatic', [MencobaController::class, 'fnaticesport']);
Route::get('/fpx', [MencobaController::class, 'fpxesport']);
Route::get('/', [MencobaController::class, 'beranda']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::post('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/edit/{id}', [BukuController::class, 'update'])->name('buku.update');

Route::get('/gudang_barang', [GudangBarangController::class, 'index']);
Route::get('/pemain', [PemainController::class, 'index']);
