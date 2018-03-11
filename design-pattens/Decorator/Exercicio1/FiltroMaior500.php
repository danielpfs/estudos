<?php
namespace Decorator\Exercicio1;

class FiltroMaior500 extends TemplateFiltro
{
    protected function condicao(Conta $conta)
    {
        return $conta->getSaldo() > 500;
    }
}
