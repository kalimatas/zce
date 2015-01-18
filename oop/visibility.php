<?php

class P {
	public $public = 'public';
	protected $protected = 'protected';
	private $private = 'private';

	public function getChildProtected() {
		return $this->childProtected . PHP_EOL;
	}

	public function testVisiblity() {
		$this->testPublic();
		$this->testPrivate();
	}

	public function testPublic() {
		echo 'P::public' . PHP_EOL;
	}

	private function testPrivate() {
		echo 'P::private' . PHP_EOL;
	}
}

class C extends P {
	protected $childProtected = 42;

	public function testPublic() {
		echo 'C::public' . PHP_EOL;
	}

	private function testPrivate() {
		echo 'C::private' . PHP_EOL;
	}
}

class T {
	private $foo;
	public function __construct($foo) {
		$this->foo = $foo;
	}
	private function bar() {
		echo 'calling private method' . PHP_EOL;
	}
	public function test(T $t) {
		// have access to private, because of the same type
		$t->foo = 'hello';
		$t->bar();
	}
}

// undefined
//echo (new P())->getChildProtected() . PHP_EOL;

// fatal
//var_dump((new P())->protected);

// fatal
//var_dump((new P())->private);

// notice: undefined; null
var_dump((new C())->private);

// calling private method
(new T(42))->test(new T('blah'));

(new C())->testVisiblity(); // C::public, P::private

echo PHP_EOL;
