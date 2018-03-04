<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/4/18
 * Time: 6:03 PM
 */

class Conservador implements Investimento
{
    public function calcula(Conta $conta)
    {
        return $conta->getSaldo() * 0.008;
    }
}