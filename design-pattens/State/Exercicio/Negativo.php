<?php
namespace State\Exercicio;

class Negativo extends Estado
{
    public function sacar(Conta $conta, $valor)
    {
        throw new \Exception('Não é permitido sacar com o saldo negativo.');
    }
    
    public function depositar(Conta $conta, $valor)
    {
        if ($valor > 0) {
            return $valor * 0.95;
        }
    }

}