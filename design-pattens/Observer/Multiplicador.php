<?php
namespace Observer;


class Multiplicador implements AcaoAposNota
{
    private $fator;

    public function __construct($fator)
    {
        $this->fator = $fator;
    }

    public function executa(NotaFiscal $notaFiscal)
    {
        echo "Valor multiplidado por {$this->fator}: ".$notaFiscal->getValorBruto() * $this->fator;
    }
}