<?php

preg_match('//', 'str');
var_dump(preg_last_error()); // 0

var_dump(preg_match("/\d+/", "hello")); // 0
//var_dump(preg_match("/\d", "hello")); // false and warning "no ending delimiter"

preg_match("/\d+/", "423 23 1", $matches);
var_dump($matches); // only 423

//preg_match_all("/^.*(\d+)\b.*$/", "hello 423 23 1", $matches);
//var_dump($matches);

echo PHP_EOL;
preg_match_all("/.*(\d{2,3}?).*$/m", "hello 423 \n no way 10", $matches);
var_dump($matches);

$phpRocks = "PhP5-rocks";

$one = "/[a-z1-5\-]*/";
$two = "/[php]{3}[1-5]{2,3}\-.*$/";
$three = "/^[hp1-5]*\-.*/";
$four = "/[hp1-5]*\-.?/";
$five = " /[hp][1-5]*\-.*/";

preg_match($one, $phpRocks, $matches);
var_dump($matches); // matches

preg_match($two, $phpRocks, $matches);
var_dump($matches); // empty array

preg_match($three, $phpRocks, $matches);
var_dump($matches); // empty array

preg_match($four, $phpRocks, $matches);
var_dump($matches); // matches 5-r

preg_match($five, $phpRocks, $matches);
var_dump($matches); // empty array


echo PHP_EOL;
