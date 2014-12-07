<?php

abstract class A {
	protected function __construct($a, $b = 2) {

	}

	abstract protected function test($a, $b, $c = 3);
}

class C extends A {
	public function __construct($a, $b, $c) {

	}

	// method is public, not protected, has additional default parameter "d"
	public function test($a, $b, $c = 3, $d =  5) {
	}
}

abstract class B extends A {}

interface I {
	const T = 42;

	public function hello($a, $b = 2);
}

interface II extends I {
	// fatal: cannot override
	//const T = 43;
}

abstract class CI implements II {}

class T extends CI {
	public function hello($a, $c = 2, $b = 3) {
	}
}

echo PHP_EOL;
