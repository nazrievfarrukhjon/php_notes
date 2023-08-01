<?php

namespace Controllers;

use App\Models\Service;
use View\View;

class Index extends BaseController {

    public function __invoke()
    {
        $view = new View();

        $view->products = \App\Models\Product::findAll();
        $view->services = Service::findAll();

        $view->display(__DIR__ . '/../Templates/index.php');
    }
}
