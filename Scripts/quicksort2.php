<?php
srand(100);
$numbers = range(1, 25);
shuffle($numbers);

// var_dump(quickSort($numbers, 0, count($numbers)));


function quicksort($array, $from, $to) {

	
	$pivotIndex = partitionArray($array, $from, $to);
	$array = quicksort($array, $pivotIndex, $to);
	$array = quicksort($array, $pivotIndex, $to);
	
	return $array;
}

$mew = [5, 4, 7, 3, 2];
var_dump(partitionArray($mew, 0, count($mew)));

function partitionArray($array, $from, $to) {

	if ($from >= $to) {
		return $from;
	}

	$pivot = $array[0];
	$pivotIndex = 0;

	for ($i=1; $i < count($array); $i++) {
		$tmp = $array[$i];
		if ($array[$i] < $pivot) {
		// if the element is less than the pivot move it to the left and move the pivot over
			$array[$i - 1] = $tmp;
			$array[$i] = $pivot;
			
		} else if ($array[$i] > $pivot) {
		// if the element if greater than the pivot move the pivot to the right
	
			
		}
	}

	return $array;
}