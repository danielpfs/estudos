<?php
namespace Memento;


class NewType implements ContractType
{
    public function next(Contract $contract)
    {
        $contract->setType(new InProgressType());
    }
}