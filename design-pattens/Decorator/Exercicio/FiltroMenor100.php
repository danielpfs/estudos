<?php
namespace Decorator\Exercicio;

class FiltroMenor100 extends TemplateFiltro
{
    protected function condicao(Conta $conta)
    {
        return $conta->getSaldo() < 100;
    }
}
