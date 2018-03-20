<?php
namespace Command;


class PayOrderCommand implements Command
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function execute() : string
    {
        $this->order->pay();

        return "Ran pay command for order of {$this->order->getName()}.";
    }
}