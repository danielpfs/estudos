<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/14/18
 * Time: 9:41 PM
 */

namespace Memento;


class InProgressType implements ContractType
{
    public function next(Contract $contract)
    {
        $contract->setType(new AdjustedType());
    }
}