<?php
namespace Command;


class FinishOrderCommand implements Command
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function execute() : string
    {
        $this->order->finish();

        return "Ran finish command for order of {$this->order->getName()}.";
    }
}