<?php
namespace TemplateMethod\Exercicio;

class Conta
{
    private $titular;
    private $agencia;
    private $numConta;
    private $saldo;

    public function __construct($titular, $agencia, $numConta, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numConta = $numConta;
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function getTitular()
    {
        return $this->titular;
    }
}