<?php
namespace State\Exercicio;

abstract class Estado
{
    abstract public function depositar(Conta $conta, $valor);
    
    abstract public function sacar(Conta $conta, $valor);
    
    public function checarEstado(Conta $conta)
    {
        if ($conta->getSaldo() >= 0) {
            $conta->setEstado(new Positivo);
        } else {
            $conta->setEstado(new Negativo);
        }
    }
}