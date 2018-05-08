<?php
namespace Command;


class Order
{
    private $name;
    private $value;
    private $status;
    private $finalDate;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
        $this->status = "Aberto";
    }

    public function pay()
    {
        $this->status = "Pago";
    }

    public function finish()
    {
        $this->finalDate = date("d/m/Y h:i:s");
        $this->status = "Entrege";
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function getFinalDate()
    {
        return $this->finalDate;
    }

    public function setFinalDate($finalDate)
    {
        $this->finalDate = $finalDate;
    }
}