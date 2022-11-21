<?php

class OrderReporter
{
    public function report(Order $order)
    {
        return [
            'id' => $order->id,
            'name' => $order->name,
            'products' => $order->getProducts(),
        ];
    }

}