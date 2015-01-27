<?php

set_exception_handler(function(\Exception $e) {
	echo 'uncaught exception' . PHP_EOL;
	var_dump($e);
});

$e = new Exception();
//$eClone = clone $e; // fatal

try {

	try {
		throw new InvalidArgumentException();
	} catch (InvalidArgumentException $e) {
		throw new Exception();
	} catch (Exception $e) {
		echo 'simple exception' . PHP_EOL;
	} finally {
		echo 'always echoed' . PHP_EOL;
	}

} catch (Exception $e) {
	echo 'here' . PHP_EOL; // will print this

	throw new \RuntimeException('uncaught exception message');
} finally {
	echo 'finally' . PHP_EOL; // printed
}

// not printed
echo 'not reached' . PHP_EOL;

echo PHP_EOL;
