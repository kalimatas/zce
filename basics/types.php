<?php

$string = "string";

var_dump((binary) $string);
var_dump(NAN === false); // false

var_dump((int) "php"); // 0
var_dump(0 == "php"); // true
var_dump(null == array()); // true

class A {}
var_dump(false == (new A())); // false

//var_dump((int)(new A())); // notice

var_dump(01090); // 010 == 8

echo PHP_INT_MAX . PHP_EOL;

var_dump((int) 92233720368557758171);
echo (int) ( (0.1+0.7) * 10 ) . PHP_EOL; // 7

echo 'You deleted C:\\*.*?' . PHP_EOL;

function f() { return "fromFunction"; };

$fromFunction = 42;

$here = <<<HERE
"hello" is a word \" returned: {${f()}}
HERE;

echo $here . PHP_EOL;

$i = 42;
echo $i[1] . PHP_EOL; // null

echo "hello"[2] . PHP_EOL; // 5.5

echo $fromFunction, $here, $i, PHP_EOL;

echo 'char: ', chr(178) . PHP_EOL;

echo PHP_EOL;
