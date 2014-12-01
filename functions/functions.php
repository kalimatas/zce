<?php

function test() {
	class T {

	}
}

//$t = new T(); // fatal: not found
test();
$t = new T(); // ok, defined now

function t($v = array('hello')) {
	var_dump($v);
}
t();

function &r(&$a = 42) {
	return $a;
}

$a =& r();
var_dump($a); // 42

function d($f, $s = 'second') {
	var_dump(func_get_args()); // only 2, no default
}
d(2);

class F {
	static $variable = 'fe';
	static function test() {}
}
$variable = 'test';
echo F::$variable() . PHP_EOL; // will call method "test"

$c = function() use ($a) {};
var_dump($c); // object Closure, static array with a

echo PHP_EOL;
