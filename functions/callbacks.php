<?php

namespace test\hello {
	class T {
		public static function test($param = null) {
			echo 'inside T::test(), param is: ' . $param . PHP_EOL;
		}

		public static function a(array $a) {
			echo count($a) . PHP_EOL;
			forward_static_call(array(new T(), 'b'));
		}

		public static function twoParams($one, $two) {
			echo $one . ':' . $two . PHP_EOL;
		}

		public static function byReference(&$a) {
			$a++;
			echo 'inside byReference: ' . $a . PHP_EOL;
		}

		public function b() {
			forward_static_call(array(__NAMESPACE__ . '\T', 'test'), 'test param');
		}
	}

	call_user_func('\test\hello\T::test');
	call_user_func(__NAMESPACE__ . '\T::test');
	call_user_func(array(__NAMESPACE__ . '\T', 'test'), 42);

	call_user_func(array(new T(), 'test'), 10); // ok

	call_user_func(__NAMESPACE__ . '\T::a', array(1,2)); // 2
	call_user_func(__NAMESPACE__ . '\T::a', array('one' => 1, 'two' => 2)); // 2
	call_user_func_array(__NAMESPACE__ . '\T::a', array(array(1,2))); // 2

	call_user_func_array(__NAMESPACE__ . '\T::twoParams', array('one' => 1, 'two' => 2)); // $one = 1, $two = 2

	$b = 42;
	//call_user_func(__NAMESPACE__ . '\T::byReference', $b); // warning, expecting by reference
	//call_user_func(__NAMESPACE__ . '\T::byReference', &$b); // fatal
	call_user_func(__NAMESPACE__ . '\T::byReference', 43); // ok
	call_user_func_array(__NAMESPACE__ . '\T::byReference', array(&$b)); // ok
	//call_user_func_array(__NAMESPACE__ . '\T::byReference', array($b)); // warning
	call_user_func_array(__NAMESPACE__ . '\T::byReference', array(43)); // ok

	(new T())->b();
	//forward_static_call(__NAMESPACE__ . '\T::test'); // fatal, not in class
}

namespace {
	call_user_func(function($param) { echo 'inside anonymous function with param=' .$param; }, 'value');

	echo PHP_EOL;
}
