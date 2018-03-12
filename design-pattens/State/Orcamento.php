<?php
namespace State;

class Orcamento
{
    private $valor;
    private $estado;

    public function __construct($valor)
    {
        $this->valor = $valor;
        $this->estado = new EmAprovacao;
    }

    public function desconto()
    {
        $this->valor-= $this->estado->calcularDesconto($this);
    }

    public function aprovar()
    {
        $this->estado->aprovar($this);
    }
    public function reprovar()
    {
        $this->estado->reprovar($this);
    }
    public function finalizar()
    {
        $this->estado->finalizar($this);
    }
    public function getEstado()
    {
        return $this->estado;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}