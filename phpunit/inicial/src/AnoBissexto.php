<?php

class AnoBissexto
{
    public function ehBissexto(int $ano)
    {
        if ($ano % 4 != 0) return false;
        if ($ano % 400 == 0) return true;
        if ($ano % 100 == 0) return false;

        return true;
    }
}