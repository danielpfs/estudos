<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/13/18
 * Time: 10:22 AM
 */

namespace Observer;


interface AcaoAposNota
{
    public function executa(NotaFiscal $notaFiscal);
}