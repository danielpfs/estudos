<?php
namespace Memento;


class Historic
{
    private $stateContract = [];


    public function addStateContract(State $state)
    {
        $this->stateContract[] = $state;
    }

    public function getStateContract($index)
    {
        return $this->stateContract[$index];
    }
}