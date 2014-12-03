<?php
// matrix set optimised to set for individual square
// get sum
// fast get sum

srand(100);
$size = 10;
$matrix = array();
$flatMatrix = array();

echo '<table border="5" cellpadding="3">';
for ($i=0;$i<$size;$i++) {
	echo '<tr>';
	for ($x=0;$x<$size;$x++) {
		echo '<td align="center">';
		$value = rand(0, pow($size, 2));
		$matrix[$i][] = $value;
		$flatMatrix[] = $value;
		echo $value;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';

$test = array(4, 5);

$targetSum = array(4, 5);

$topLeft = $matrix[$test[0]][$test[1]];
$topRight = $matrix[$test[0]][$test[1] + 1];
$botLeft = $matrix[$test[0] + 1][$test[1]];
$botRight = $matrix[$test[0] + 1][$test[1] + 1];

echo $topLeft + $topRight + $botLeft + $botRight;

echo '<br />';

$topLeft = $flatMatrix[($test[0] * $size) + $test[1]];
$topRight = $flatMatrix[($test[0] * $size) + $test[1] + 1];
$botLeft = $flatMatrix[($test[0] * $size) + $test[1] + $size];
$botRight = $flatMatrix[($test[0] * $size) + $test[1] + $size + 1];

echo $topLeft + $topRight + $botLeft + $botRight;