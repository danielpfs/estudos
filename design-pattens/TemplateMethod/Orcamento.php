<?php
namespace TemplateMethod;

class Orcamento 
{
    private $valor;
    private $itens = [];

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function addItem(Item $item)
    {
        $this->itens[] = $item;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }
}