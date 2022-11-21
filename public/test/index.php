<?php

require_once 'Order.php';
require_once 'OrderSaver.php';
require_once 'OrderReporter.php';
require_once 'Product.php';

$product = new Product();
$storageBd = new SaveDB();
$storageFile = new FileStorage();

$order = new Order();
$order->addProduct($product);

$saver = new OrderSaver($storageFile);
$saver->save($order);
