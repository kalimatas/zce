<?php

declare(ticks=1);

register_tick_function(function() {
	echo 'tick handler called' . PHP_EOL;
});

$a = 1;
if ($a > 0) {
	$a++;
	echo $a . PHP_EOL;
}

echo PHP_EOL;
