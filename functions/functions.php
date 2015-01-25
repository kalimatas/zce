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

function byRef(&$v) {
	var_dump(func_get_arg(0));
	$v = 42;
	var_dump(func_get_arg(0)); // new value
}
$b = 10;
byRef($b);

function eblanstvo($x, $x = 1, $x = 2) {
	var_dump(func_get_args());
	var_dump(func_get_arg(0));
	var_dump(func_get_arg(1));
	//var_dump(func_get_arg(2)); // warning, no argument
	return $x;
}

echo eblanstvo(3, 4); // 2 O_o

class F {
	static $variable = 'fe';
	static function test() {}
}
$variable = 'test';
echo F::$variable() . PHP_EOL; // will call method "test"

$c = function() use ($a) {};
var_dump($c); // object Closure, static array with a

function leftDefault($one = 'value', $two) {
	var_dump($one); // two
	var_dump(func_get_args()); // one element - 'two' value
}
leftDefault('two'); // PHP Warning:  Missing argument 2 for leftDefault()

function notunique($x, $y = 1, $y = 2) {
	var_dump($x, $y);
	var_dump(func_num_args()); // 1
}
notunique(1); // x = 1, y = 2

echo PHP_EOL;
