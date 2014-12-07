<?php

class T {
	// &$value will cause fatal
	public function __set($key, $value) {
		printf("setting %s to %s\n", $key, $value);
	}

	public function __get($key) {
		printf("trying to access %s\n", $key);
	}

	public static function __callStatic($name, $args) {
		printf("calling %s\n", $name);
	}
}

$t = new T;
$t->hello = 42;
var_dump($t->var);

// __get is not called, becuase $a will get the result of assignment == 8
$a = $t->b = 8;
var_dump($a);

T::test();

echo PHP_EOL;
