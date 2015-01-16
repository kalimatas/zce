<?php

$arr = array(
	array(
		'id' => 1,
		'name' => 'name1',
	),
	array(
		'id' => 2,
		'name' => 'name2',
	),
);
var_dump(array_column($arr, null, 'id')); // index by id
var_dump(sprintf("count: %d", count($arr, COUNT_RECURSIVE))); // 6

$barr = array(
	1 => true,
	2 => false,
	3 => true,
	4 => 1,
);
var_dump(array_keys($barr, true)); // 1, 3, 4
var_dump(array_keys($barr, true, true)); // 1, 3 // strict

$carr = array(1, "1a", 1.0);
var_dump(array_unique($carr)); // 1, 1a
var_dump(array_unique($carr, SORT_REGULAR)); // 1

$darr = array(
	'', 10,
);
var_dump(in_array(false, $darr)); // true, loose comparison
var_dump(in_array(false, $darr, true)); // false, strict comparison

$keys = ['one', 'two'];
$values = ['v1', 'v2', 'v3'];
//var_dump(array_combine($keys, $values)); // false, warning: wrong params number

$input = array("red", "green", "blue", "yellow");
$extracted = array_splice($input, 1, count($input), "orange");
var_dump($extracted); // green, blue, yello
var_dump($input);

// insert new data
$extracted = array_splice($input, 1, 0, ['new']);
var_dump($input); // now contains 'new'
var_dump($extracted); // empty

echo PHP_EOL;
