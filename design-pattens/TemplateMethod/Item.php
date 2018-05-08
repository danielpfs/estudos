<?php
namespace TemplateMethod;

class Item 
{
    private $name;
    private $valor;
    
    public function __construct($name, $valor)
    {
        $this->name = $name;
        $this->valor = $valor;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValor()
    {
        return $this->valor;
    }
}