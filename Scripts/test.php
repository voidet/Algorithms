<?php

$arrayMe = [9, 7, 5, 3, 2, 1, 2, 3, 4, 5, 6, 4];

$mew = sortme($arrayMe);
print_r($mew);

function sortme($array) {

	if (count($array) <= 1) {
		if (empty($array)) {
			return null;
		}
		return $array;
	}

	$mid = count($array) / 2;
	$left = sortme(array_slice($array, 0, $mid));
	$right = sortme(array_slice($array, $mid));
	return mergeit($left, $right);
}

function mergeit($left, $right) {

	$c = 0;
	$d = 0;
	$cc = [];

	for ($i=0; $i < (count($left) + count($right)); $i++) {

		if (!empty($left[$c]) && $left[$c] <= $right[$d] || (empty($right[$d]))) {
			$cc[$i] = $left[$c];
			$c++;
		} else if (!empty($right[$d]) && $right[$d] <= $left[$c] || (!empty($right[$d]))) {
			$cc[$i] = $right[$d];
			$d++;
		}

	}

	return $cc;

}


