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

echo PHP_EOL;
