<?php

$ages = [5,6,3,8,2,6,4,2,7,9,0];
var_dump(bubbleSort($ages));

function bubbleSort($ages) {
	for ($i=0; $i < count($ages); $i++) {
		for ($j=0;$j < count($ages) - $i - 1;$j++) {
			if ($ages[$j] > $ages[$j + 1]) {
				$swappedVar = $ages[$j];
				$ages[$j] = $ages[$j + 1];
				$ages[$j + 1] = $swappedVar;
			}
		}
	}
	return $ages;
}