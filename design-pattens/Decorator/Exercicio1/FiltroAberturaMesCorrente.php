<?php
namespace Decorator\Exercicio1;

class FiltroAberturaMesCorrente extends TemplateFiltro
{
    protected function condicao(Conta $conta)
    {
        if ($conta->getData()->format('m') == date('m')) {
            return true;
        } 

        return false;
    }
}
