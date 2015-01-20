<?php

class A {
	private function foo() {
		echo 'A foo' . PHP_EOL;
	}

	public function test() {
		$this->foo();
		static::foo();
	}
}

class B extends A {}
class C extends A {
	private function foo() {
		echo 'C foo' . PHP_EOL;
	}
}

(new B)->test();
// prints 'A foo' and fatal
// Call to private method C::foo() from context 'A'
(new C)->test();



echo PHP_EOL;
