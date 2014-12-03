<?php

$ages = [8, 2, 9, 1, 3, 4, 6];

for ($i = 1; $i < count($ages); $i++) {
	$age = $ages[$i];
		
	while ($i >= 0 && $ages[$i - 1] > $age) {
		$ages[$i] = $ages[$i - 1];
		$i--;
	}
	
	$ages[$i] = $age;
}

var_dump($ages);