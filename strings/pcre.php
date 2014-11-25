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

echo PHP_EOL;
