<?php

class T {
	public $v;

	/**
	 * without this: PHP Catchable fatal error:  Object of class T could not be converted to string
	 */
	public function __toString() {
		return $this->v;
	}
}
$t1 = new T;
$t1->v = '123';

$t2 = new T;
$t2->v = '12345';

$a = [$t2, $t1];
print_r($a);

sort($a, SORT_STRING);
print_r($a);

echo PHP_EOL;
