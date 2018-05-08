<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/13/18
 * Time: 10:23 AM
 */

namespace Observer;


class EmailNotaFiscal implements AcaoAposNota
{
    public function executa(NotaFiscal $notaFiscal)
    {
        echo 'Email enviado.';
    }
}