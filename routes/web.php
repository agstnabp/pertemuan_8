<?php

use Illuminate\Support\Facades\Route;

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


