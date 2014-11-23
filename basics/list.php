<?php

$info = array('coffee', 'brown', 'caffeine');

// skip brown
list($drink, , $power) = $info;

list($bar) = "abcde";
var_dump($bar); // NULL

// but
$s = "abcde";
list($sss) = $s;
var_dump($sss); // a

$info = array('coffee', 'brown', 'caffeine');
list($a[0], $a[1], $a[2]) = $info;
var_dump($a); // reverse order


/*
// only numerical
$arr = [
	'a' => ['a' => 'hello a', 'b' => 'hello b'],
	'b' => ['a' => 'hello a', 'b' => 'hello b'],
];

foreach ($arr as list($a, $b)) {
	echo $a . PHP_EOL;
	echo $b . PHP_EOL;
}
*/


echo PHP_EOL;
