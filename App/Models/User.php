<?php

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE = 'users';
    public $name;
    public $email;
    public $password;

    public static function getModelName()
    {
        return 'users';
    }
}
