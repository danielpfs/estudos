<?php
namespace State\Exercicio;

class Positivo extends Estado
{
    public function sacar(Conta $conta, $valor)
    {
        if ($valor > 0) {
            return $valor;
        }
    }
    
    public function depositar(Conta $conta, $valor)
    {
        if ($valor > 0) {
            return $valor * 0.98;
        }
    }

   
}
