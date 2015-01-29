<?php

namespace test {
	class A {
		public $t = 42;
		public $tt = null;
		public static $st = 42;
		public static $stNull = null;
		private $cc = 'private';

		public function __construct() {
			var_dump(get_class()); // the name of the class the method defined in (test\A)
			var_dump(get_class($this)); // ...called from
			var_dump(static::class);
		}

		public function test() {}
		public static function testStatic() {}
		private function privateMethod() {}
	}

	class C extends A {}

	class_alias('\test\A', '\test\B');
	var_dump((new B) instanceof A); // true

	var_dump(get_class_methods('\test\A')); // no private
}

namespace {
	use test\A, test\C, test\B;

	$a = new A;
	$a->h = 'new';
	var_dump(get_class_vars('test\A')); // returns 't', 'tt', 'st', 'stNull'
	var_dump(get_object_vars($a)); // t, tt, h: accessible, non-static

	var_dump(get_class($a)); // test\A

	$b = new B;
	var_dump(get_class($b)); // test\A, just alias

	// __construct will print
	$c = new C;

	//var_dump(get_declared_interfaces());

	var_dump(isset($a->tt)); // false
	var_dump(isset($a::$st)); // true
	var_dump(isset($a::$stNull)); // false
	var_dump(isset($a->h));  // true
	var_dump(property_exists($a, 'h'));  // true
	var_dump(property_exists($a, 'tt')); // true
	var_dump(property_exists($a, 'st')); // true
	var_dump(property_exists($a, 'cc')); // true, though it's private

	var_dump(method_exists('test\B', 'privateMethod')); // true

	echo PHP_EOL;
}
