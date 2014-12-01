<?php

var_dump(function_exists('print')); // false

function shutdown() {
	echo 'inside shutdown' . PHP_EOL;
}
register_shutdown_function('shutdown');
//exit(); // will cause shutdown to run

function incr(&$a) {
	$a++;
}

$a = 0;
//call_user_func('incr', $a); // warning - exptected reference
//var_dump($a); // 0
call_user_func_array('incr', array(&$a));
var_dump($a); // 1

class Call {
	public static function st() {}
	public function inst() { echo 'inside inst' . PHP_EOL; }
}

//call_user_func(array('Call', 'inst')); // runs, but Strict standards - calling non-static method
//call_user_func('Call::inst'); // the same



echo PHP_EOL;
