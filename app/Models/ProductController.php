<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductController extends Model
{
    public function index() {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
}
