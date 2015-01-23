<?php

trait T {
	public $h = 42;
	public function test() {
		echo 'trait test method' . PHP_EOL;
		$this->calledFromTrait(); // works
	}
	abstract protected function abs($a);
}

trait TT {
	//public $h = 43; // will cause fatal, cannot alias or use
	//public $h = 42; // will cause strict, but works
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

trait WithConstructor {
	public function __construct() {
		echo 'trait constructor' . PHP_EOL;
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
		TT::priv as public newPriv; // change visibility and name
	}

	// will override trait's
	//public function test() {
	//	echo 'child test method' . PHP_EOL;
	//}

	// works, no error
	public function abs() {
		echo 'from abs' . PHP_EOL;
	}

	private function calledFromTrait() {
		echo 'called from trait' . PHP_EOL;
	}
}

class C1 {
	use Counter;
}

class C2 {
	use WithConstructor;

	// no trait constructor is called if class constructor is defined
	//public function __construct() {}
}

// trait test method
(new C())->test();
(new C())->newTest();
// 42
echo (new C())->h . PHP_EOL;
// fatal: call to protected method
//(new C())->pub();

// works
(new C())->newPriv();

(new C())->abs();

$c = new C;
$c->incr();
$c->incr(); // 2

$c1 = new C1;
$c1->incr(); // 1

$c2 = new C2; // trait constructor

echo PHP_EOL;
