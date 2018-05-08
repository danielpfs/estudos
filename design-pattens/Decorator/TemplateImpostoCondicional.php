<?php
namespace Decorator;


abstract class TemplateImpostoCondicional extends Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        if ($this->condicao($orcamento)) {
            return $this->verdadeiro($orcamento) + $this->outroImposto($orcamento);
        } else {
            return $this->falso($orcamento) + $this->outroImposto($orcamento);
        }
    }

    abstract public function condicao(Orcamento $orcamento);

    abstract public function verdadeiro(Orcamento $orcamento);

    abstract public function falso(Orcamento $orcamento);
}