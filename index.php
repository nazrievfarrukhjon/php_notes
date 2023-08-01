<?php

require __DIR__ . '/autoload.php';

$product = new \App\Models\Product();
$product->title = 'test';
$product->price = 42000;
$product->insert();
var_dump($product);
