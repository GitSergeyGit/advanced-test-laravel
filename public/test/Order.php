<?php

class Order
{
    public $id;
    public $name;
    protected $_products;

    public function addProduct(Product $product)
    {
        $this->_products[] = $product;
    }
}