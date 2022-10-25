<?php

namespace App\Http\Controllers\API;

use App\Services\Product\ProductFacade;

class ProductController
{
    public function index()
    {
        return ProductFacade::index();
    }

    public function store()
    {
        ProductFacade::create([
            'awdawdaw'
        ]);
    }
}
