<?php

class A {
	private static $foo = 1;
	private $bar = 2;
}

$c1 = static function() {
	return A::$foo;
};
$c2 = function() {
	return $this->bar;
};

$bc1 = Closure::bind($c1, null, 'A');
echo $bc1() . PHP_EOL; // 1

$bc2 = Closure::bind($c2, new A(), 'A');
echo $bc2() . PHP_EOL; // 2

echo PHP_EOL;
