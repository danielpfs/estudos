<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/4/18
 * Time: 4:58 PM
 */

class Item
{
    private $nome;
    private $valor;

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}