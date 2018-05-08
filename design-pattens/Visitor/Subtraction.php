<?php
namespace Visitor;

class Subtraction implements Expression
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
        return $this->left->evaluate() - $this->right->evaluate();
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->subtraction($this);
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function getRight()
    {
        return $this->right;
    }
}