<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/4/18
 * Time: 5:59 PM
 */

interface Investimento
{
    public function calcula(Conta $conta);
}