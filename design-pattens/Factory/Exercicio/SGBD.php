<?php
namespace Factory\Exercicio;


interface SGBD
{
    public function __construct(SGBD $sGBD = null);
    public function connect(ConfigIni $config);
}