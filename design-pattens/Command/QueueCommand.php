<?php
namespace Command;


class QueueCommand
{
    private $commmands = [];

    public function add(Command $command)
    {
        $this->commmands[] = $command;
    }

    public function execute()
    {
        $string = '';

        foreach ($this->commmands as $commmand) {
            $string .= $commmand->execute().'<br>';
        }

        return $string;
    }
}