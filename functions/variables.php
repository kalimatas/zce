<?php

$s = new stdClass;
var_dump(floatval($s)); // 1 and notice

$c = null;
var_dump(isset($c)); // false

var_dump(strval([1, 2])); // Array and notice

echo PHP_EOL;
