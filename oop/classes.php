<?php

class T {
	const HELLO = 'hello const in T';

	public static $hello = '42';

	public static function getNew() {
		return new static;
	}
}

class TT extends T {
	const HELLO = 'hello const in TT';

	public static $hello = '43';
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

echo PHP_EOL;
