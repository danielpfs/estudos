<?php
namespace Factory\Exercicio;


class PostgreSQL extends TemplateSGBD
{
    protected function connection($config)
    {
        if ($config == 'pg') {
            return 'PostgreSQL';
        }
    }
}