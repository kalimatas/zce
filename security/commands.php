<?php

$command = 'ls -l';
$dir = escapeshellarg('../');
$fullCommand = $command . ' ' . $dir;

$lastLine = exec($fullCommand, $output);
var_dump($lastLine);
//var_dump($output); // all output

//passthru($fullCommand); // outputs raw data
$list = shell_exec($fullCommand);
//var_dump($list); // as a string

echo PHP_EOL;
