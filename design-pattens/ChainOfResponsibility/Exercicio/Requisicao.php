<?php
namespace ChainOfResponsibility\Exercicio;


class Requisicao
{
    private $formato;

    public function __construct($formato)
    {
        $this->formato = $formato;
    }

    public function getFormato()
    {
        return $this->formato;
    }

    public function requisitar(Conta $conta)
    {
        $xml = new XML();
        $csv = new CSV();
        $por = new Porcento();
        $sem = new SemResposta();

        $xml->setProxima($csv);
        $csv->setProxima($por);
        $por->setProxima($sem);

        return $xml->responde($this, $conta);
    }
}