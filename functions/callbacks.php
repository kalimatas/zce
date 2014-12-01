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

		public function b() {
			forward_static_call(array(__NAMESPACE__ . '\T', 'test'), 'test param');
		}
	}

	call_user_func('\test\hello\T::test');
	call_user_func(__NAMESPACE__ . '\T::test');
	call_user_func(array(__NAMESPACE__ . '\T', 'test'), 42);

	call_user_func(array(new T(), 'test'), 10); // ok

	call_user_func(__NAMESPACE__ . '\T::a', array(1,2)); // 2
	call_user_func_array(__NAMESPACE__ . '\T::a', array(array(1,2))); // 2

	(new T())->b();
	//forward_static_call(__NAMESPACE__ . '\T::test'); // fatal, not in class
}

namespace {
	echo PHP_EOL;
}
