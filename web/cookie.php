<?php

setcookie('test', 'value f helo', 0, '', '', false, true);
setrawcookie('test-no-encode', rawurlencode('value f elo'), 0, '', '', false, true);

echo '<pre>';

var_dump($_COOKIE);
var_dump($_REQUEST);

echo PHP_EOL;
