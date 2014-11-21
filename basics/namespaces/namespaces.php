<?php

namespace test\hello {
	function test() {}
	const TEST = 42;

	class T {
		public function test() {
			echo __CLASS__ . PHP_EOL;
			echo __METHOD__ . PHP_EOL;
			echo __FUNCTION__ . PHP_EOL;
		}
	}

	/** @var \test\hello\T $cClass */
	$c = 'test\hello\T';
	$cClass = new $c();
	$cClass->test();

	require 'class.php';

	$c1 = 'T'; // from file class.php
	$c1Class = new $c1();
	$c1Class->test();

	$c2 = __NAMESPACE__ . '\T'; // test\hello\T
	$c2Class = new $c2;
	$c3Class = new namespace\T();
}

namespace {
	test\hello\test();

	$t = 'test\hello\T';
	$tClass = new $t();
	$tClass->test();
}
