<?php

/**
 * @param int $start
 * @param int $stop
 *
 * @return Generator
 */
function gen($start, $stop) {
	//return 42; // fatal: cannot return value

	for ($i = (int) $start; $i < (int) $stop; ++$i) {
		if ($i == 13) {
			return; // will terminate the generator
		}

		$d = (yield $i);
	}
}

$g = gen(1, 2);
// Generator object
var_dump($g);

foreach (gen(1, 10) as $v) {
	echo $v . ' ';
}

function withKey() {
	foreach ([13, 42, 19] as $k => $v) {
		yield $k => $v;
	}
}

foreach (withKey() as $k => $v) {
	echo $k . ' ' . $v . PHP_EOL;
}

function &ref() {
	$v = 5;
	while ($v > 0) {
		yield $v;
	}

}

foreach (ref() as &$v) {
	echo --$v .  ' ';
}

echo PHP_EOL;

function sendGen() {
	while (true) { // without this only one value
		$str = yield;
		echo $str . ' ';
	}
}

/** @var Generator $sg */
$sg = sendGen();
$sg->send(42);
$sg->send(13);

echo PHP_EOL;
