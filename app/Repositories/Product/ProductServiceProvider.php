<?php

namespace App\Repositories\Product;

use App\Repositories\BaseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(BaseRepositoryInterface::class, function ($app) {
            return new ProductRepository();
//            return new PdoProductRepository();
        });
    }
}
