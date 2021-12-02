<?php

class ArraySorteado
{


    public function sorteado()
    {

        $array = [];
        $count = 0;

        for ($i = 0; $i < 20; $i++) {
            $array[$i] = rand(1, 10);
            echo "[$array[$i]]";
        }


        $contagem = array_count_values($array);

        foreach ($contagem as $numero => $vezes) {
            if ($count < $vezes) {
                $count = $vezes;
                $maiornumero = $numero;
                $maisvezes = $vezes;
            }
        }
        echo "O número que mais se repete é o $maiornumero <br />";
        echo "Ele se repete  $maisvezes vezes <br />";
    }
}


$sorteado = new ArraySorteado;
$sorteado->sorteado();
