<?php

namespace App;

class Db
{
    public static Dn|null $instance = null;
    protected \PDO $dbh;

    protected function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO('mysql:dbname=' . $config['dbname'] . ';host=' . $config['host'],
            $config['user'],
            $config['password']
        );
    }

    public static function instance(): \PDO|Db|null
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function query($sql, $class, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);

        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

//        $res = [];
//
//        foreach ($data as $row) {
//            $item =  new $class;
//            foreach ($row as $key => $value) {
//                if (is_numeric($key)) {
//                    continue;
//                }
//                $item->$key = $value;
//            }
//            $res[] = $item;
//        }
//
//        return $res;
    }

    public function execute($sql, $data): bool
    {
        $sth = $this->dbh->prepare($sql);

        return $sth->execute($data);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }
}
