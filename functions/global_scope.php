<?php

$a = 20;

function test($b) {
	$a = 30; // local copy

	// now $a is global 20
	// $c is declared
	global $a, $c;

	// returns the value of assignment == 60
	return $c = ($b + $a);
}

// $c == 60 after function call
print test(40) + $c; // 120

echo PHP_EOL;
