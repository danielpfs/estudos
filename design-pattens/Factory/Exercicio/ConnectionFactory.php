<?php
namespace Factory\Exercicio;

class ConnectionFactory
{
    private $connection;

    public function __construct()
    {
        $config = new ConfigIni();
        $c = new Mysql(new PostgreSQL());

        $this->connection = $c->connect($config);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}