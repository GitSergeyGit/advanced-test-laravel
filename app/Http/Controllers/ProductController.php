<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController
{
    public function show($id)
    {
        return view('product/show', [
            'product' => Product::find($id)
        ]);
    }
}