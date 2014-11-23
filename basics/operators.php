<?php

// FALSE < TRUE

var_dump(null == ""); // true

var_dump(true == 42); // true

$c1 = curl_init();
$c2 = curl_init();

$c1String = (int) $c1;
var_dump($c1 == $c1String); // true :)
var_dump($c1 == $c2);

$a1 = array(2,3,4);
$a2 = array(1,2,3,4);

var_dump($a1 < $a2); // true

$b1 = array(
	'a' => 42,
	'b' => 42,
);

$b2 = array(
	'a' => 42,
	'c' => 42,
);

var_dump($b1 < $b2); // always false, uncomparable

$e1 = array(
	'a' => 42,
	'b' => 42,
);

$e2 = array(
	'a' => 42,
	'b' => 42,
);

var_dump($e1 == $e2); // true

$o = new stdClass();
class A {}
$o1 = new A();
//var_dump($o1 > 13); // notice: could not be converted to int

var_dump($e1 > 10); // true, array always greater

/* errors */

// will die with custom error
//$my_file = @file('non_existent_file') or die ("Failed opening file: error was '$php_errormsg'" . PHP_EOL);

/* increment/decrement */

$c = 'B';
$cc = 'Z';
$ccc = '/';
$b = 'A09';
echo --$c . PHP_EOL; // B, no effect
echo ++$c . PHP_EOL; // C
echo ++$cc . PHP_EOL; // AA ?
echo ++$ccc . PHP_EOL; // "/", only plain ASCII alphabets and digits
echo ++$b . PHP_EOL; // A10

/* logical */
$e = false || true;
var_dump($e); // true
$e = false or true;
var_dump($e); // false

/* instanceof */
const H = 'P';
class P {}
class C extends P {}
$cClass = new C();
$pClass = new P;
var_dump($cClass instanceof P); // true
var_dump(!$cClass instanceof A); // true
var_dump($cClass instanceof $pClass); // true

var_dump(is_a('C', 'P')); // false
var_dump(is_a('C', 'P', true)); // true, no __autoload

$aaa = null;
var_dump(isset($aaa)); // false

echo PHP_EOL;
