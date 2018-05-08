<?php
namespace Observer;

class Item 
{
    private $nome;
    private $valor;

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}