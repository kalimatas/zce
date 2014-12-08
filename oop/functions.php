<?php

namespace test {
	class A {
		public $t = 42;
		public $tt = null;
		private $cc = 'private';

		public function __construct() {
			var_dump(get_class()); // the name of the class the method defined in (test\A)
			var_dump(get_class($this)); // ...called from
		}

		public function test() {}
		public static function testStatic() {}
	}

	class C extends A {}

	class_alias('\test\A', '\test\B');
	var_dump((new B) instanceof A); // true

	var_dump(get_class_methods('\test\A'));
}

namespace {
	use test\A, test\C;

	$a = new A;
	$a->h = 'new';
	var_dump(get_class_vars('test\A')); // returns only 't', defined property

	var_dump(get_class($a)); // test\A

	// __construct will print
	$c = new C;

	//var_dump(get_declared_interfaces());

	var_dump(isset($a->tt)); // false
	var_dump(property_exists($a, 'tt')); // true
	var_dump(property_exists($a, 'cc')); // true, though it's private

	echo PHP_EOL;
}
