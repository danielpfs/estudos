<?php
namespace Memento;


class State
{
    private $contract;

    public function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }

    public function getContract()
    {
        return $this->contract;
    }
}