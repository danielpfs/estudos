<?php
namespace Decorator;


class IHIT extends TemplateImpostoCondicional
{
    public function condicao(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 100;
    }

    public function verdadeiro(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.13;
    }

    public function falso(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.01;
    }

}