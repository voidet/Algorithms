<?php

srand(100);
$numbers = range(1, 25);
shuffle($numbers);

var_dump(quickSort($numbers));

function quickSort($array) {

	if (count($array) <= 1) {
		return $array;
	}

	$pivot = array_shift($array);
	$left = [];
	$right = [];

	for ($i=0; $i < count($array); $i++) {
		if ($array[$i] < $pivot) {
			$left[] = $array[$i];
		} else {
			$right[] = $array[$i];
		}
	}

	$leftSorted = quickSort($left);
	$rightSorted = quickSort($right);

	$result = array_merge($leftSorted, [$pivot], $rightSorted);
	return $result;
}

