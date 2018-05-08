<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/14/18
 * Time: 9:38 PM
 */

namespace Memento;


interface ContractType
{
    public function next(Contract $contract);
}