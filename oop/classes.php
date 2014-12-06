<?php

class T {
	const HELLO = 'hello const in T';

	public static $hello = '42';

	public static function getNew() {
		return new static;
	}

	public static function getHelloConst() {
		echo self::HELLO . PHP_EOL;
		echo static::HELLO . PHP_EOL;
	}

	public function test() {
		//var_dump($this); // undefined if called statically
		echo 'inside test' . PHP_EOL;
	}

	public function __destruct() {
		echo static::class . ' destructor runs' . PHP_EOL;
	}
}

class TT extends T {
	const HELLO = 'hello const in TT';
	public static $hello = '43';

	public function tt() {
		echo 'TT old style constructor runs' . PHP_EOL;
	}

	public function __construct() {
		// emits E_STRICT: redefine constructor
		echo 'TT new style constructor runs' . PHP_EOL;
	}

	public static function getParentHello() {
		return parent::$hello;
	}
}

$name = 't';
$cl = new $name();

$c = new T();
$c1 = new $c();
$c2 = T::getNew();
$c3 = TT::getNew();
var_dump(get_class($c3)); // TT, because of "static". would be T, if it were "return new self"

var_dump(TT::$hello);
var_dump(TT::getParentHello());

var_dump(T::HELLO);
var_dump(TT::HELLO);

TT::getHelloConst();

//throw new Exception(); destructors won't run

// fatal
//var_dump((new T())->$hello);
// works
var_dump($c::$hello);
// works
(new T())->getHelloConst();

// works, but E_STRICT
T::test();

echo PHP_EOL;
