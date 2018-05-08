<?php
namespace State\Exercicio;

class Conta
{
    private $saldo;
    private $estado;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
        $this->estado = new Positivo;
    }

    public function depositar($valor)
    {
        $this->saldo+= $this->estado->depositar($this, $valor);
        $this->estado->checarEstado($this);
    }

    public function sacar($valor)
    {
        $this->saldo-= $this->estado->sacar($this, $valor);
        $this->estado->checarEstado($this);
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}
