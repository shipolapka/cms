<?php

namespace Engine\Core\Database;

use \PDO;
use Engine\Core\Config\Config;

class Connection
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    /**
     * @throws \Exception
     */
    private function connect()
    {
        $config = Config::file('database');
        $dsn = 'mysql:host = ' . $config['host'] . 'db_name = ' . $config['db_name'] . 'charset = ' . $config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    public function query($sql)
    {
        $exe = $this->execute($sql);

        $result = $exe->fetchAll(FETCH_ASSOC);

        if($result === false) {
            return [];
        }

        return $result;
    }
}

$db = new Connection();

