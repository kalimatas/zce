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

$patterns = [
	"/[a-z1-5\-]*/",
	"/[php]{3}[1-5]{2,3}\-.*$/",
	"/^[hp1-5]*\-.*/",
	"/[hp1-5]*\-.?/",
	" /[hp][1-5]*\-.*/",
];

foreach ($patterns as $pattern) {
	if (preg_match($pattern, $phpRocks)) {
		printf("pattern \"%s\" matches %s\n", $pattern, $phpRocks);
	}
}

echo PHP_EOL;
