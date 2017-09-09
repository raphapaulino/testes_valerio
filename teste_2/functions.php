<?php

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

function lotofacil()
{

    $result = randomNumbers();

    $tables = 3;
    $c1 = 0;
    $c2 = count($result);
    $c3 = 0;

    for ($a=1; $a<=$tables; $a++) :

        echo '<table border="1">';

            for ($i = 0; $i <= 4; $i++):

                echo "<tr>";
                for ($f = 0; $f <= 4; $f++):

                    echo "<td>{$result[$f]}</td>";

                endfor;
                echo "</tr>";

                $c1++;

            endfor;

        echo '</table>';

        echo '<br>';

    endfor;
}

function linha($semana)
{
    echo "<tr>";
    for ($i = 0; $i <= 4; $i++):
        if (isset($semana[$i])) {
            echo "<td>{$semana[$i]}</td>";
        } 
    endfor;
    echo "</tr>";
}