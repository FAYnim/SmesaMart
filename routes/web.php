<?php

use Illuminate\Support\Facades\Route;

// Halaman Publik
Route::get('/', function () {
    return view('index');
});

// Halaman Admin
Route::get('/checkout', function () {
    return view('admin.checkout');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/produk', function () {
    return view('admin.produk');
});

Route::get('/stok', function () {
    return view('admin.stok');
});

Route::get('/stok/edit', function () {
    return view('admin.stok-edit');
});

Route::get('/pesanan', function () {
    return view('admin.pesanan');
});

Route::get('/pengembalian', function () {
    return view('admin.pengembalian');
});

Route::get('/pengaturan', function () {
    return view('admin.pengaturan');
});
