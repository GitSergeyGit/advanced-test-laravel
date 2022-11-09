<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\Product\ProductFacade;

class ProductController
{
    public function index()
    {
//        return ProductFacade::index();
        return ProductResource::collection(Product::paginate(15));
//        return ProductResource::collection(ProductFacade::index());
//        return new ProductResource(ProductFacade::show(1));
    }

    public function store()
    {
        ProductFacade::create([
            'awdawdaw'
        ]);
    }
}
