<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepositoryInterface;

class ProductRepository implements BaseRepositoryInterface
{
    public function all()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function create(array $parameters)
    {
        return Product::create($parameters);
    }

    public function update(array $parameters, int $id)
    {
        $product = $this->find($id);
        $product->update($parameters);
        return $product;
    }

    public function delete(int $id)
    {
        $product = $this->find($id);
        $product->delete();
        return $product;
    }

}