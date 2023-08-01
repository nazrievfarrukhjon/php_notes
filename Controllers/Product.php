<?php

namespace Controllers;

use View\View;

class Product extends BaseController
{
    public function __invoke()
    {
        $this->view->product = \App\Models\Product::findById($_GET['id'])[0];
        $this->view->display(__DIR__ . '/../Templates/product.php');
    }
}
