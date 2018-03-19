<?php
namespace BridgesAndAdapters;


class ProceduralDate implements Date
{
    public function getDay() : string
    {
        return date('d');
    }

    public function getMonth() : string
    {
        return date('m');
    }
}