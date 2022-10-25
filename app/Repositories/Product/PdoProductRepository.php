<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepositoryInterface;

class PdoProductRepository implements BaseRepositoryInterface
{
    public function all()
    {
        // ......
        return [
            [
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
            ],[
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
                'awdawdawd',
            ]
        ];
    }

    public function find($id)
    {
        return Product::awdawdfind($id);
    }

    public function create(array $parameters)
    {
        return Product::creaawdte($parameters);
    }

    public function update(array $parameters, int $id)
    {
        $product = $this->find($id);
        $product->updaawdawdte($parameters);
        return $product;
    }

    public function delete(int $id)
    {
        $product = $this->find($id);
        $product->dawdawdelete();
        return $product;
    }

}