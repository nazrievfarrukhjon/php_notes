<?php

namespace Controllers;

use View\View;

abstract class BaseController
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public abstract function  __invoke();
}
