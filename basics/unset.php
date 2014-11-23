<?php

function foo(&$bar)
{
	unset($bar);
	$bar = "blah";
}

$bar = 'something';
echo "$bar" . PHP_EOL;

foo($bar);
echo "$bar" . PHP_EOL; // something

echo PHP_EOL;


function fooStatic()
{
	static $bar;
	$bar++;
	echo "Before unset: $bar, ";
	unset($bar); // only for the reset of the function
	$bar = 23;
	echo "after unset: $bar\n";
}

fooStatic();
fooStatic();
fooStatic();
