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

$arr2 = [
	'one' => 1,
	'two' => 2,
	'three' => 3,
];

var_dump(array_map(function($value) {
	return $value * 2;
}, $arr2)); // with string keys

var_dump(array_map(function($value1, $value2) {
	return array($value1 * 2, $value2);
}, $arr2, $arr2)); // with numeric keys, because more than 1 parameter


$fa = [
	'one' => 10, // yes
	10 => .2, // yes
	'two' => 'hello', // yes
	'three' => '',
	11 => null,
];

$fa = array_filter($fa);
var_dump($fa);

echo PHP_EOL;
