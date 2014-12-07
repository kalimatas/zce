<?php

trait T {
	public $h = 42;
	public function test() {
		echo 'trait test method' . PHP_EOL;
	}
	abstract protected function abs($a);
}

trait TT {
	//public $h = 43; // will cause fatal, cannot alias or use
	public function test() {
		echo 'TT trait test method' . PHP_EOL;
	}
	public function pub() {
		echo 'public' . PHP_EOL;
	}
	private function priv() {
		echo 'private' . PHP_EOL;
	}
}

trait Counter {
	public function incr() {
		static $c = 0;
		$c++;
		echo $c . PHP_EOL;
	}
}

class P {
	public function test() {
		echo 'parent test method' . PHP_EOL;
	}
}

class C extends P {
	use T, TT, Counter {
		T::test insteadof TT;
		TT::test as newTest;
		TT::pub as protected;
		TT::priv as public;
	}

	// will override trait's
	//public function test() {
	//	echo 'child test method' . PHP_EOL;
	//}

	// works, no error
	public function abs() {
		echo 'from abs' . PHP_EOL;
	}
}

class C1 {
	use Counter;
}

// trait test method
(new C())->test();
(new C())->newTest();
// 42
echo (new C())->h . PHP_EOL;
// fatal: call to protected method
//(new C())->pub();

// works
(new C())->priv();

(new C())->abs();

$c = new C;
$c->incr();
$c->incr(); // 2

$c1 = new C1;
$c1->incr(); // 1

echo PHP_EOL;
