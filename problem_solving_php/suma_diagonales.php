<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
    $i1 = 0;
    $i2 = count($arr) - 1;

    $leftSum = 0;
    $rightSum = 0;

    foreach ($arr as $k => $elements) {
        $leftSum += $elements[$i1 + $k];
        $rightSum += $elements[$i2 - $k];
    }
    $total = $leftSum - $rightSum;
    return abs($total);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
