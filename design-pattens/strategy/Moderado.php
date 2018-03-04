<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/4/18
 * Time: 6:10 PM
 */

class Moderado implements Investimento
{
    public function calcula(Conta $conta)
    {
        if (mt_rand(1,100) > 50) {
            return $conta->getSaldo() * 0.025;
        }
        return $conta->getSaldo() * 0.007;
    }
}