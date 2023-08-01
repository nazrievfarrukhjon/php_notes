<?php

use App\Models\Product;
use View\View;

require __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';

$class = '\\Controllers\\' . $ctrl;
if (class_exists($class)) {
    $ctrl = new $class;
    $ctrl();
} else {
    die('nooooo!');
}

//$view = new View();
//$view->products = Product ::findAll();
//$view->services = Product::findAll();
//echo count($view); die;
//$view->display(__DIR__ . '/Templates/index.php');
