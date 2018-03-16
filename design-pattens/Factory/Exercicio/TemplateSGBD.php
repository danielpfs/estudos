<?php
namespace Factory\Exercicio;


abstract class TemplateSGBD implements SGBD
{
    private $next;

    public function __construct(SGBD $sGBD = null)
    {
        $this->next = $sGBD;
    }

    public function connect(ConfigIni $config)
    {
        $c =  $this->connection($config->getSGBD());

        if ($c) {
            return $c;
        }

        if (!$this->next){
            throw new \Exception('Nenhum SGBD encontrado.');
        }

        return $this->next->connect($config);
    }

    abstract protected function connection($config);
}