<?php

$x = 2;
$y = 10;

$number = powe($x, $y);
var_dump($number);

// 2 pow 4 expect 16
// 2 x 2 x 2 x 2
function powe($base, $exp) {

	if ($exp <= 1) {
		return $base;
	}

	if ($exp % 2) {
		$exp = floor($exp / 2);
		$number = powe($base, $exp);
		return $number * $number * $base;
		
	} else {
		$exp = $exp / 2;
		$number = powe($base, $exp);
		return $number * $number;	
	}

}