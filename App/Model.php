<?php

namespace App;

abstract class Model
{
    public $id;

    abstract public static function getModelName();
    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query(
            $sql,
            static::class
        );
    }
}
