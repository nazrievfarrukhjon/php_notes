<?php

namespace App\Models;

use App\Model;

class Product extends Model implements HasPrice, HasTitle
{
    const TABLE = 'products';

    public string $title;
    public int $price;

    public function __construct()
    {
    }

    public static function getModelName(): string
    {
        return static::TABLE;
    }

    public function getPrice(): int
    {
        // TODO: Implement getPrice() method.
    }

    public function getTitle(): int
    {
        // TODO: Implement getTitle() method.
    }
}
