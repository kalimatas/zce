<?php

echo '<pre>';

$привет = "hello";
echo $привет . PHP_EOL;

$unset_str .= 'abc'; // notice
var_dump($unset_str);

$unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
var_dump($unset_arr);

$unset_obj->foo = 'bar'; // warning, but works
var_dump($unset_obj);

/* superglobals */
echo $_SERVER['PHP_SELF'] . PHP_EOL; // basics/variables.php (from root)
var_dump($_SERVER['argv']);
var_dump($_GET);

setcookie('test', 'test_value');
var_dump($_COOKIE);
var_dump($_REQUEST);
var_dump($_ENV);

var_dump($argc);

echo PHP_EOL;
