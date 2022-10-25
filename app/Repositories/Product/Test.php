<?php

namespace App\Repositories\Product;

use App\Repositories\Product\ProductRepository;

class Test
{
    public $test1;
    private $test2;
    protected $test3;
    public $test4;

    public function __construct(ProductRepository $repository, int $id)
    {
        $this->repository = $repository;
    }

    public function index()
    {
    }
}