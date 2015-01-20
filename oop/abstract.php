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

abstract class B extends A {
	public function __construct() {

	}
}

interface I {
	const T = 42;

	public function __construct($a);
	public function hello($a, $b = 2);
}

interface II extends I {
	// fatal: cannot override
	//const T = 43;
}

interface III {
	public function hello($a, $b = 4); // the same as I::hello (but default value doesn't match), can use two interfaces
}

abstract class CI implements II, III {}

class T extends CI {
	public function __construct($a, $v = 2) {

	}

	//public function hello($a, $c) {} // fatal: not compatible
	public function hello($a, $c = 3, $b = 3) {} // default value doesn't match, but works
}

echo PHP_EOL;
