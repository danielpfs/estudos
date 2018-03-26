<?php

class Leilao
{
    private $descricao;
    private $lances;

    function __construct($descricao)
    {
        $this->descricao = $descricao;
        $this->lances = array();
    }

    public function propoe(Lance $lance)
    {
        if ($this->checaUsuario($lance->getUsuario())) {
            $this->lances[] = $lance;
        }
    }

    public function dobraLance(Usuario $usuario)
    {
        $l = null;
        foreach ($this->getLances() as $lance) {
            if ($lance->getUsuario() == $usuario) $l = $lance;
        }
        if ($l) {
            return $this->propoe(new Lance($usuario, $l->getValor() * 2));
        }
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getLances()
    {
        return $this->lances;
    }

    private function checaUsuario(Usuario $usuario)
    {
        $total = 0;
        $seguidos = 0;

        foreach ($this->getLances() as $lance) {
            if ($lance->getUsuario() == $usuario) {
                $total++;
                $seguidos++;
            } else $seguidos = 0;
        }

        return $total < 5 and $seguidos < 2;
    }
}
