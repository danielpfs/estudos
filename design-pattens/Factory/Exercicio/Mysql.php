<?php
namespace Factory\Exercicio;


class Mysql extends TemplateSGBD
{
    protected function connection($config)
    {
        if ($config == 'mysql') {
            return 'Mysql';
        }
    }
}