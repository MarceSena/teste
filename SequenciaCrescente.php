<?php

class SequenciaCrescente
{


    public function sequenciaCrescente()
    {


        $array = [1, 2, 1, 2, 2];
        $contagem = array_count_values($array);


        foreach ($contagem as $numero => $vezes) {
            if ($vezes > 2) {
                return false;
            }
        }



        foreach ($array as $key => $value) {
            $array = [1, 2, 1, 2];

            unset($array[$key]);

            $arrayA = $array;
            sort($array);
            $arrayB = $array;

            $stringA = implode(",", $$arrayA);
            $stringB = implode(",", $$arrayB);


            if ($stringA == $stringB) return true;
        }
    }
}



$sequencia = new SequenciaCrescente;
$sequencia->sequenciaCrescente();
