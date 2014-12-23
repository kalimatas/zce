<?php

try {

	try {
		throw new InvalidArgumentException();
	} catch (InvalidArgumentException $e) {
		throw new Exception();
	} catch (Exception $e) {
		echo 'simple exception' . PHP_EOL;
	}

} catch (Exception $e) {
	echo 'here' . PHP_EOL; // will print this
}

echo PHP_EOL;
