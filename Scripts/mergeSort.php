<?php

$ages = [8,1,2,4,5,2,8,6,4,2,2];

var_dump(sortAges($ages));

function sortAges($ages) {

	if (count($ages) <= 1) {
		return $ages;
	}

	$mid = count($ages) / 2;
	$left = sortAges(array_slice($ages, 0, $mid));
	$right = sortAges(array_slice($ages, $mid));

	return merge_sort($left, $right);
}

function merge_sort($left, $right) {

	$newArray = [];
	$leftCount = 0;
	$rightCount = 0;

	for ($i=0; $i < (count($left) + count($right)); $i++) {

		if (!empty($left[$leftCount]) && ($left[$leftCount] <= $right[$rightCount] || empty($right[$rightCount]))) {
			$newArray[$i] = $left[$leftCount];
			$leftCount++;
		} else if (!empty($right[$rightCount]) && ($right[$rightCount] <= $left[$leftCount] || empty($left[$leftCount]))) {
			$newArray[$i] = $right[$rightCount];
			$rightCount++;
		}

	}
	
	return $newArray;
}