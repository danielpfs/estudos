<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/4/18
 * Time: 6:02 PM
 */

class Conta
{
    private $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
}