<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama_produk', 'deskripsi', 'kategori', 'harga', 'stok'];
}
