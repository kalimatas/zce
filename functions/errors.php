<?php

//error_reporting(E_STRICT);

// will be called anyway
set_error_handler(function($errno, $errstr) {
	printf("error: [%d] %s\n", $errno, $errstr);
	//return false; // will cause default error handler to run
});

set_exception_handler(function(Exception $e) {
	printf("error: [%d] %s\n", $e->getCode(), $e->getMessage());
});

var_dump($s);

set_error_handler(null); // reset to default

var_dump($s);

//throw new Exception('test', 42);

// generates warning: invalid type
//trigger_error('test', E_COMPILE_ERROR);

echo PHP_EOL;
