<?php

namespace App;

abstract class Model
{
    public int $id;

    abstract public static function getModelName();
    public static function findAll()
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query(
            $sql,
            static::class
        );
    }

    public function insert(): void
    {
        $props = get_object_vars($this);
        $column = [];
        $bindings = [];
        $data = [];

        foreach ($props as $k => $v) {
            $column[] = $k;
            $bindings[] = ':' . $k;
            $data[':' . $k] = $v;
        }

        $sql = 'INSERT INTO ' . static::TABLE . '
        (' . implode(',', $column) . ') 
        VALUES (' . implode(',', $bindings) . ')';

        $db = Db::instance();
        $db->execute($sql, $data);
        $this->id = $db->lastId();
    }
}
