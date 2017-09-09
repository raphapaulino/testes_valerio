<?php

include_once('../dd.php');

/**
 * 1 - Criar uma função que retorne um array com 15 dezenas aleatórias entre 1 e 25. Os números não
 * podem se repetir e devem estar na ordem crescente.
 */
function randomNumbers()
{
    $numbers = [];

    for($i=0; $i<=14; $i++) {
        array_push($numbers, rand(1, 25));
    }

    return $numbers;
}

$result = randomNumbers();

dd($result);