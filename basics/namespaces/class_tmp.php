<?php

namespace foo\newHello;

class T {
	public function test() {
		echo __CLASS__ . PHP_EOL;
		echo __METHOD__ . PHP_EOL;
		echo __FUNCTION__ . PHP_EOL;
	}
}

$t = new T();
$t->test();
