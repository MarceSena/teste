<?php

class Seculo
{
    public $ano;
    public $num;

    public function seculoAno($ano)
    {
        $seculo = round($ano / 100);
        if (($ano % 100) != 0)   return $seculo + 1;

        return $seculo;
    }
}

$seculo = new Seculo;
$seculo->seculoAno(201);
