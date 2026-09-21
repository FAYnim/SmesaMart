<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/stok', function () {
    return view('stok');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});
