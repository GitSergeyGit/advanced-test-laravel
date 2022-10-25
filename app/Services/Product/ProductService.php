<?php

namespace App\Services\Product;

use App\Repositories\BaseRepositoryInterface;

class ProductService
{
    public $repository;

    public function __construct(BaseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function store(array $attr)
    {
        ///
        ///
        ///
        ///
        ///
        $this->repository->create($attr);
    }

    public function update(array $attr, $id)
    {
        $this->repository->update($attr, $id);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
    }
}
