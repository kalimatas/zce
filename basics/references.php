<?php

function foo(&$var) {}

foo($a); // no notice, because of &

$b = array();
foo($b['b']);

var_dump(array_key_exists('b', $b)); // true

$c = new stdClass();
foo($c->bar);
var_dump(property_exists($c, 'bar')); // true

$eRef = null;
$row = &$eRef;
foreach (array(1, 2) as $row) {}
var_dump($eRef); // 2

$f1 = 1;
$f2 = array(2, 3);
$f3 = array(&$f1, &$f2[0], &$f2[1]);
$f4 = $f3;
var_dump($f3);
var_dump($f3 === $f4); // true
$f4[0] = 10;
var_dump($f1); // 10

function foobar(&$var) { $var++; }
function bar() {
	$a = 5;
	return $a;
}
foobar(bar()); // strict
//foo(4); // fatal

$c = 5;
function &getRef() {
	global $c;
	return $c;
}
$c1 = &getRef();
$c1++;
var_dump($c); // 6
var_dump($c1); // 6


function &collector() {
	static $collection = array();
	return $collection;
}
array_push(collector(), 'foo');
//array_push(&collector(), 'foo'); // fatal
var_dump(collector()); // foo is inside

function func(&$arraykey) {
	return $arraykey;
}

$array = array('a', 'b', 'c');
foreach (array_keys($array) as $key) {
	$y = &func($array[$key]);
	$z[] = &$y;
}

var_dump($z); // c, c, c
