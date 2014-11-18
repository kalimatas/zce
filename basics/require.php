<?php

echo 'tags.php will be evaluated' . PHP_EOL;
include 'tags.php';

set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . DIRECTORY_SEPARATOR . 'test/for/include');

$o = include 'test.php';
var_dump($o);

testFunctionFromInclude(); // function is available despite the fact it's after return

//include '../basics/test/for/include/test.php'; // work only if executed from within "basics" dir
