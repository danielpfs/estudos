<?php
namespace Memento;


class AdjustedType implements ContractType
{
    public function next(Contract $contract)
    {
        $contract->setType(new DoneType());
    }
}