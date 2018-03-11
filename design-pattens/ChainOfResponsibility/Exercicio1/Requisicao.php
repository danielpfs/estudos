<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/6/18
 * Time: 4:55 PM
 */

namespace ChainOfResponsibility\Exercicio1;


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