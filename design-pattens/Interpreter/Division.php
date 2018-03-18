<?php
namespace Interpreter;

class Division implements Expression
{
    private $left;
    private $right;

    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function evaluate()
    {
        return $this->left->evaluate() / $this->right->evaluate();
    }
}