<?php
namespace Strategy\Exercicio1;

interface Investimento
{
    public function calcula(Conta $conta);
}