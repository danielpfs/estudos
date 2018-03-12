<?php
namespace Strategy\Exercicio;

class Conservador implements Investimento
{
    public function calcula(Conta $conta)
    {
        return $conta->getSaldo() * 0.008;
    }
}