<?php
namespace Decorator\Exercicio;

class FiltroMaior500 extends TemplateFiltro
{
    protected function condicao(Conta $conta)
    {
        return $conta->getSaldo() > 500;
    }
}
