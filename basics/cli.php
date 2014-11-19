#!/usr/local/bin/php
<?php

var_dump(php_sapi_name());

echo ini_get('memory_limit') . PHP_EOL;

var_dump($argv);

while ($line = fgets(STDIN)) echo 'from stdin: ' . $line;

echo PHP_EOL;
