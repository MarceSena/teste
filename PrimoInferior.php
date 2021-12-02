<?php

class PrimoInferior
{

    public function primoInferior($num)
    {
        if ($num < 0) return 0;

        $maior = -9999999999;
        for ($i = 2; $i < $num; $i++) {
            for ($j = 1; $j < $num; $j++) {
                if (($j % 2 != 0 && $j % 3 != 0)) {
                    if ($maior < $j) {
                        $maior = $j;
                    }
                }
            }
        }

        return $maior;
    }
}
$primo = new PrimoInferior;
$primo->primoInferior(30);
