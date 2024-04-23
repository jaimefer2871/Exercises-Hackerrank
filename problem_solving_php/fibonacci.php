<?php

echo "Serie de fibonacci";

function fibonacci($num)
{
	$a = [0,1];

	for ($i = 2; $i < $num; ++$i) {
		$a[$i] = $a[$i -1] + $a[$i -2];
	}

	print_r($a);
}

fibonacci(10);