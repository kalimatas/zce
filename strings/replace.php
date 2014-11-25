<?php

$str = 'abbple pear';
$search = array('b', 'pear');
$replace = array('pear', '');

$r = str_replace($search, $replace, $str);
var_dump($r); // "aple "

$str = 'a b';
$search = array('b', 'pear');
$replace = array('pear', 'chiki');

$r = str_replace($search, $replace, $str);
var_dump($r); // "a chiki"

str_replace("a", "z", "aabbcceeddaa", $var);
var_dump($var); // 4, number of replacemenets done

echo PHP_EOL;
