<?php

class RealizadorDeInvestimentos
{
    public function investir(Conta $conta, Investimento $investimento)
    {
        $conta->setSaldo($conta->getSaldo() + ($investimento->calcula($conta) * 0.75));
    }
}