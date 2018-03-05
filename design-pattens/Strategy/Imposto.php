<?php
namespace Strategy;

interface Imposto
{
    public function calcula(Orcamento $orcamento);
}