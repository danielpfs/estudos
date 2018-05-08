<?php
namespace ChainOfResponsibility\Exercicio;

class Conta
{
    private $titular;
    private $saldo;

    public function __construct($nome, $saldo)
    {
        $this->titular = $nome;
        $this->saldo = $saldo;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }


}