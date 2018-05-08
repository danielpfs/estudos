<?php

class LeilaoBuilder
{
    private $leilao;
    private $descricao;
    private $lances;

    public function descricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function lance(Usuario $usuario, $valor)
    {
        $this->lances[] = new Lance($usuario, $valor);

        return $this;
    }

    public function build()
    {
        $this->leilao = new Leilao($this->descricao);

        foreach ($this->lances as $lance) {
            $this->leilao->propoe($lance);
        }

        return $this->leilao;
    }
}