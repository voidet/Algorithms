<?php

$targets = range(0, 100);
$targetVal = 100;
$set = array();

foreach ($targets as $target) {
	$difference = $targetVal - $target;
	if (in_array($difference, $set)) {
		var_dump($target, $difference);
		break;
	} else {
		$set[] = $target;
	}

}	