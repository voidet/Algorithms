<?php

$vanillaTarget = 920;

$symbols = array(
	1000 => 'M',
	500 => 'D',
	100 => 'C',
	50 => 'L',
	10 => 'X',
	5 => 'V',
	1 => 'I'
);

function debug($val) {
	var_dump($val);
}

$target = $vanillaTarget;
$i = 0;
$keys = array_values($symbols);
$values = array_keys($symbols);

foreach ($symbols as $value => $symbol) {

	$times = $value / $target;
	
	// if we can fit two or more of our targets into the number
	// we're looking at then we've done something wrong
	if ($times > 0 && $times < 2) {

		$hop = 2;
		if (getFirstDigit($value) == 5) {
			$hop = 1;
		}
		// look at the first digit, if it's a 5 then we're in a mid point of our 10's


		// next hop value is used to look ahead and see how many times a lower number
		// can fit into the difference of the number currently and our target
		// i.e how many times can 100 fit into 400 if we're currently looking at "D"
		$nextHopValue = $values[$i + $hop];
		$difference = $value - $target;

		$timesBeforeOrAfter = 0;
		if (!empty($nextHopValue)) { 
			$timesBeforeOrAfter = ceil($difference / $nextHopValue);
		}

		if ($timesBeforeOrAfter > 0) {
			// if there are less than 3 occurances, lets take that off our current symbol
			// by placing the lookahead symbol in front of our symbol at the moment
			if ($timesBeforeOrAfter < 3) {
				echo str_repeat($keys[$i + $hop], $timesBeforeOrAfter);
				echo $symbol;
				$target -= $values[$i] - ($values[$i + $hop] * $timesBeforeOrAfter);

				//if however the number is greater than 3, then lets append it to the
				//next symbol ahead of the one we're currently examining
			} else if ($timesBeforeOrAfter > 3) {
				echo $keys[$i + 1];
				echo str_repeat($keys[$i + $hop], 5 - $timesBeforeOrAfter);
				$target -= $values[$i + 1] + ($values[$i + $hop] * (5 - $timesBeforeOrAfter));
				//take the symbol we generated off our running target
			}
		} else {
			// cleanly divisible, just need to figure out how many of them we should display
			$repeat = floor($target / $value);
			if ($repeat > 0) {
				echo str_repeat($symbol, $repeat);
			}
			$target -= $value * $repeat;
		}

		// bail out, our work is done here
		if ($target <= 0) {
			break;
		}

	}
	
	$i++;
}

function getFirstDigit($i) {
  while ($i > 10) {
    $i = $i / 10;
  }
  return (int)floor($i);
}