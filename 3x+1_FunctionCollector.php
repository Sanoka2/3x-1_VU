<?php
function Calculations ($number) {
	if ($number % 2) {
		$currentNumber = $number * 3 + 1;
	} else {
		$currentNumber = $number / 2;
	}
	return $currentNumber;
}
?>