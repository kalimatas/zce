<?php

$c = new stdClass();

$a = array(
	1.8 => 'hello', // will become 1
	010 => 'b', // 8
	08 => 'a', // 0
	null => 'empty', // ""
	//$c => '1',  // Illegal offset type
);
var_dump($a);

$b = array(
	'a',
	'b',
	'1' => 'hello',
); // 0 => 'a', 1 => 'hello'
var_dump($b);

$c = array(2 => 'hello', 42); // 3 => 42
var_dump($c);

$d[] = 1; // new array is created
var_dump($d);

$u = array(1, 2, 3);
foreach ($u as $i => $v) {
	//unset($v); doesn't work
	unset($u[$i]); // works
}
var_dump($u);
var_dump($v); // still 3

unset($a);
//var_dump($a); // undefined variable
$a['a'] = null;
$a['b'] = array();
var_dump($a['a']['non-existent']); // null, DOES NOT throw an E_NOTICE error as expected.
//var_dump($a['b']['non-existent']); // throws an E_NOTICE as expected

var_dump((array) null); // empty

class A {
	private $A = 1;
	protected $B = 5;
	public $C = 10;
	public $AA = 15;
}

class B {
	private $CC;
}

var_dump((array) new A());
/*
array(4) {
  ["AA"]=> \0A\0A, class name is appended
  int(1)
  ["*B"]=> protected have *
  int(5)
  ["C"]=>
  int(10)
  ["AA"]=>
  int(15)
}
 */
var_dump((array) new B()); // only BCC => null


$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
$b = array(0 => "apple", 1 => "banana");
var_dump($a === $b); // bool(true)

echo PHP_EOL;
