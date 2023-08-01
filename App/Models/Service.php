<?php

namespace App\Models;

use App\Model;

class Service extends Model implements HasPrice
{
    const TABLE = 'services';
    public string $title;
    public int $price;

    protected static Service|null $instance = null;

    public static function instance(): Service
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {

    }

    public static function getModelName()
    {
        // TODO: Implement getModelName() method.
    }

    public function getPrice(): int
    {
        // TODO: Implement getPrice() method.
    }

}
