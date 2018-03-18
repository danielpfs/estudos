<?php
namespace Interpreter;

class SquareRoot implements Expression
{
    private $number;

    public function __construct(Expression $expression)
    {
        $this->number = $expression;
    }

    public function evaluate()
    {
        return sqrt($this->number->evaluate());
    }
}