<?php
namespace Memento;


class Contract
{
    private $name;
    private $date;
    private $type;

    public function __construct($name, $date = null, $type = null)
    {
        $this->name = $name;
        $this->date = $date ?? date('Y-m-d h:i:s');
        $this->type = $type ?? new NewType();
    }

    public function next()
    {
        $this->type->next($this);
    }

    public function setType(ContractType $contractType)
    {
        $this->type = $contractType;
    }

    public function saveState()
    {
        return new State(new Contract($this->name, $this->date, $this->type));
    }
}