<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/12/18
 * Time: 5:29 PM
 */

namespace Builder;


class ItemBuilder
{
    private $nome;
    private $valor;

    public function comValor($valor)
    {
        $this->valor = $valor;
    }

    public function comNome($nome)
    {
        $this->nome = $nome;
    }

    public function build()
    {
        return new Item($this->nome, $this->valor);
    }
}