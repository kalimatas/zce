<?php

$arr1 = array(
	22,
	'1' => '2',
);
$arr2 = array(
	'0' => 22,
	'2',
);

var_dump(array_diff_assoc($arr1, $arr2)); // no diff
var_dump(array_intersect_assoc($arr1, $arr2)); // will return all $arr1

$a = array(1, 2, 4, 8);
$b = array(0, 2, 4, 6, 8, 10);

echo count(array_merge(
	array_diff($a, $b),
	array_diff($b, $a)
)); // 4

var_dump([1,2,3] + [4,5,6]); // 1,2,3 the same indices are not overwritten

echo PHP_EOL;
