<?php

$arr = array(
	'one' => 1,
	'two' => 2,
	'three' => 3,
);

$print = function($value, $key) {
	printf("%s: %s\n", $key, $value);
};

array_walk($arr, $print);

array_walk($arr, function(&$value, $key, $prefix) {
	$value = $prefix . ': ' . $key;
}, 'number');

array_walk($arr, $print);

echo PHP_EOL;
reset($arr);
echo next($arr) . PHP_EOL;
array_walk($arr, $print); // all elements
echo next($arr) . PHP_EOL; // nothing, need to reset



echo PHP_EOL;
