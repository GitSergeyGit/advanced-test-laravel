<?php

namespace App\Services\Product;

use App\Repositories\BaseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class ProductFacadeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('productService', function ($app) {
            return new ProductService(
                $app->make(BaseRepositoryInterface::class)
            );
        });
    }
}
