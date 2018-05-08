<?php
namespace TemplateMethod;


class Calculadora
{
    public function imposto(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calcula($orcamento);
    }
}