<?php

namespace foo {
	class Xyz {
		public function __construct() {
			echo __CLASS__ . PHP_EOL;
		}
	}

	function abc() {
		echo __NAMESPACE__ . PHP_EOL;
	}
}

namespace bar {
	class Xyz {
		public function __construct() {
			echo __CLASS__ . PHP_EOL;
		}
	}

	function abc() {
		echo __NAMESPACE__ . PHP_EOL;
	}
}

namespace bar {
	use \foo\Xyz as Xyzz;
	use \foo\abc;
	new Xyzz();
	abc(); // bar despite use \foo\abc;
	\foo\abc(); // foo
}

namespace {
	function abc() {
		echo 'global' . PHP_EOL;
	}
}
