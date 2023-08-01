<?php

use App\Models\Product;
use App\Models\Service;
use View\View;

require __DIR__ . '/autoload.php';

$view = new View();

$view->products = Product::findAll();
$view->services = Service::findAll();

$view->display(__DIR__ . '/Templates/index.php');

