<?php
namespace Strategy\Exercicio1;

class Arrojado implements Investimento
{
    public function calcula(Conta $conta)
    {
        $e = mt_rand(1,100);
        if ($e <= 20) {
            return $conta->getSaldo() * 0.05;
        } elseif ($e <= 30) {
            return $conta->getSaldo() * 0.03;
        } else {
            return $conta->getSaldo() * 0.006;
        }
    }
}