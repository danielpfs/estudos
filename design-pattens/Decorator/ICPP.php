<?php

namespace Decorator;


class ICPP extends TemplateImpostoCondicional
{
    public function condicao(Orcamento $orcamento)
    {
        return $orcamento->getValor() < 500;
    }

    public function verdadeiro(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }

    public function falso(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }
}