<?php
namespace Interpreter;

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
}