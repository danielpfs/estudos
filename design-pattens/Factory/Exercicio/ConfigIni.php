<?php
namespace Factory\Exercicio;


class ConfigIni
{
    private $config;

    public function __construct($path = 'config.ini')
    {
        $this->config = parse_ini_file($path);
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getSGBD()
    {
        return strtolower($this->config['db_connection']);
    }
}