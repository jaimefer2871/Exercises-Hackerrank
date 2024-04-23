<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    $symbol ='#';
    $output = '';

    for ($s=0; $s < $n; $s++) {
        $output.=$symbol;

        echo str_pad(trim($output), $n, " ", STR_PAD_LEFT) . "\n";
    }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);