<?php

// replaces by keys

$arr1 = array('citrus' => array('orange'), 'apple', 'mango' => array('h' => 'aga', 20));
$arr2 = array('citrus' => 42, 1 => 'juice', 'mango' => array(10));

var_dump(array_replace_recursive($arr1, $arr2));

echo PHP_EOL;
