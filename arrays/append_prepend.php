<?php

$arr = array(4 => 1, 2, 3, 5);
array_shift($arr); // starts keys from zero
var_dump($arr);

$ass = array(
	'one' => 'one',
	'two' => 'two',
);
array_unshift($ass, array('two' => 'three')); // will be add as new element at 0 index
var_dump($ass);

echo PHP_EOL;
