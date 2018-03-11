<?php
namespace TemplateMethod;


abstract class TemplateImpostoCondicional implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        if ($this->condicao($orcamento)) {
            return $this->verdadeiro($orcamento);
        } else {
            return $this->falso($orcamento);
        }
    }

    abstract public function condicao(Orcamento $orcamento);

    abstract public function verdadeiro(Orcamento $orcamento);

    abstract public function falso(Orcamento $orcamento);
}