<?php
namespace Visitor;

class Number implements Expression
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function evaluate()
    {
        return $this->number;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->number($this);
    }

    public function getNumber()
    {
        return $this->number;
    }
}