<?php
namespace Factory;

class ConnectionFactory
{
    public function getConnection()
    {
        $host = 'host';
        $user = 'root';
        $pass = 'pass';
        $base = 'base';

        return mysqli_connect($host, $user, $pass, $base);
    }
}