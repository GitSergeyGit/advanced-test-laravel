<?php

class OrderSaver
{
    protected $_db;

    public function __construct(StorageInterface $storage)
    {
        $this->_db = $storage;
    }

    public function save(Order $order)
    {
        $this->_db->save([
            'id' => $order->id,
            'name' => $order->name,
        ]);
    }
}