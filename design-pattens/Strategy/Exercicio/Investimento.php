<?php
namespace Strategy\Exercicio;

interface Investimento
{
    public function calcula(Conta $conta);
}