<?php 

function checkfibonacci($n)
{
    $a = 0;
    $b = 1;
    if ($n==$a || $n==$b) return true;

    $c = $a+$b;
    var_dump($c);
    while($c<=$n)
    {
        if($c == $n) return true;
        $a = $b;
        $b = $c;
        $c = $a + $b;
    }
    return false;
}

var_dump(checkfibonacci(2));
