<?php

echo 'from test/for/include/test.php' . PHP_EOL;
return; // will return null to calling script

// function is available despite the fact it's after return
function testFunctionFromInclude() {
	echo 'testFunctionFromInclude' . PHP_EOL;
}
