<?php

include_once('../dd.php');

/**
 * 1 - Criar uma função que retorne um array com 15 dezenas aleatórias entre 1 e 25. Os números não
 * podem se repetir e devem estar na ordem crescente.
 */
function randomNumbers()
{
    $numbers = [];
 
    for ($i=0; $i<=14; $i++) {
        $formatted_value = sprintf("%02d", rand(1, 25));
        array_push($numbers, $formatted_value);
    }
 
    return $numbers;
}

function dezenas()
{
    $numbers = [];
    
    for ($y=1; $y<=25; $y++) {
        $formatted_value = sprintf("%02d", $y);
        array_push($numbers, $formatted_value);
    }

    return $numbers;
}

function sorteados()
{
    $numbers = [1,4,5,6,9,10,11,12,19,20,21,22,23,24,25];
    $numeros_formatados = [];

    foreach($numbers as $n) {
        $formatted_value = sprintf("%02d", $n);
        array_push($numeros_formatados, $formatted_value);
    }

    return $numeros_formatados;
}

function lotofacil()
{

    $dezenas = dezenas();
    $aposta = randomNumbers();
    $numeros_sorteados = sorteados();

    echo '<table border="1">';

        echo "<tr>";

            foreach ($dezenas as $c) {

                $css1 = "";

                if(in_array($c, $numeros_sorteados)) {
                    $css1 = "background:#4caf50;color:#fff;";
                }

                echo "<td style='{$css1}'>{$c}</td>";

                if($c % 5 == 0) {
                    echo "</tr><tr>";
                }

            };

        echo "</tr>";

    echo '</table>';

    echo '<br>';
    
    echo "
        <div style='max-width:500px;padding: 5px 15px 5px 15px;background-color:#333;color:#fff'>
        Aposta: ";

        foreach($aposta as $a):
            echo $a . ", ";
        endforeach;

    echo "</div>";

}