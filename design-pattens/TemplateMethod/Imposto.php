<?php
namespace TemplateMethod;


interface Imposto
{
    public function calcula(Orcamento $orcamento);
}