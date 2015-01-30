<?php

preg_match('//', 'str', $matches);
var_dump(preg_last_error()); // 0

var_dump(preg_match("/\d+/", "hello")); // 0
//var_dump(preg_match("/\d", "hello")); // false and warning "no ending delimiter"

preg_match("/\d+/", "423 23 1", $matches);
var_dump($matches); // only 423

preg_match_all("/\d+/", "423 23 1", $matches);
var_dump($matches); // all numbers

//preg_match_all("/^.*(\d+)\b.*$/", "hello 423 23 1", $matches);
//var_dump($matches);

echo PHP_EOL;
preg_match_all("/.*(\d{2,3}?).*$/m", "hello 423 \n no way 10", $matches);
var_dump($matches);

preg_match_all("/\(?  (\d{3})?  \)?  (?(1)  [\-\s] ) \d{3}-\d{4}/x", "Call 555-1212 or 1-800-555-1212", $phones);

echo preg_replace(array('/\d/', '/\s/'), '*', 'xp 4 to', -1 , $count) . PHP_EOL; // x***to

$subject = array('1', 'a');
$pattern = array('/\d/', '/[a-z]/', '/[1a]/');
$replace = array('A:$0', 'B:$0', 'C:$0');
// 1 -> A:1 -> A:C:1

print_r(preg_replace($pattern, $replace, $subject));
print_r(preg_filter($pattern, $replace, $subject));

$html = "<h3>hello text</h3>";
$html = preg_replace_callback(
	'(<h([1-6])>(.*?)</h\1>)',
	function ($m) {
		return "<h$m[1]>" . strtoupper($m[2]) . "</h$m[1]>";
	},
	$html
);

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

$string = 'The quick brown fox jumped over the lazy dog.';
$patterns = array();
$patternsT[0] = '/quick/';
$patternsT[1] = '/brown/';
$patternsT[2] = '/fox/';
$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';

// The bear black slow jumped over the lazy dog.
echo preg_replace($patternsT, $replacements, $string);

echo PHP_EOL;
