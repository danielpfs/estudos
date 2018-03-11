<?php
namespace Decorator\Exercicio1;

class FiltroMenor100 extends TemplateFiltro
{
    protected function condicao(Conta $conta)
    {
        return $conta->getSaldo() < 100;
    }
}
