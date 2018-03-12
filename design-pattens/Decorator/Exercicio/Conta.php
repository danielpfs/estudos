<?php
namespace Decorator\Exercicio;

class Conta
{
    private $saldo;
    private $data;

    public function __construct($saldo, \DateTime $data)
    {
        $data->format('d-m-Y');
        $this->saldo = $saldo;
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}
