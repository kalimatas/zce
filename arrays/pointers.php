<?php

$arr = array(1, 2, 3, 4);
echo reset($arr) . PHP_EOL; // 1
next($arr);
echo current($arr) . PHP_EOL; // 2

echo PHP_EOL;
