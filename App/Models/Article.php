<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    const TABLE = 'news';
    public $title;
    public $content;

    public static function getModelName()
    {
        return 'news';
    }
}
