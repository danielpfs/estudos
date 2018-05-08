<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/13/18
 * Time: 10:25 AM
 */

namespace Observer;


class NotaFiscalDao implements AcaoAposNota
{
    public function executa(NotaFiscal $notaFiscal)
    {
        echo 'Inserido no bd.';
    }
}