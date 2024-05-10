<?php

/**
 *
 * Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long integers.

Example

The minimum sum is  and the maximum sum is . The function prints

16 24
Function Description

Complete the miniMaxSum function in the editor below.

miniMaxSum has the following parameter(s):

arr: an array of  integers
Print

Print two space-separated integers on one line: the minimum sum and the maximum sum of  of  elements.

Input Format

A single line of five space-separated integers.

Constraints


Output Format

Print two space-separated long integers denoting the respective minimum and maximum values that can be calculated by summing exactly four of the five integers. (The output can be greater than a 32 bit integer.)

Sample Input

1 2 3 4 5
Sample Output

10 14
 */
/*
 * Complete the 'miniMaxSum' function below.
 *7 69 2 221 8974
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr)
{
    $arrayLength = count($arr);
    $total = $arrayLength - 1;
    $min = $max = 0;
    $arrTotal = [];
    for ($i = 0; $i < $arrayLength; $i++) {

        $newArr = $arr;
        unset($newArr[$i]);

        $arrTotal[] = array_sum($newArr);
    }

    echo min($arrTotal) . ' ' . max($arrTotal);
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);