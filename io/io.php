<?php

var_dump(getcwd());
var_dump(basename(__FILE__, '.php')); // io
var_dump(basename('/')); // ""
var_dump(realpath("/no/such/file")); // false

$tLink = __DIR__ . DIRECTORY_SEPARATOR . '../README.md';
$sLink = __DIR__ . DIRECTORY_SEPARATOR . 'read.md';

if (is_link($sLink)) {
	unlink($sLink);
}
symlink($tLink, $sLink);
var_dump($sLink);
unlink($sLink);

$tmpFile = '/tmp/tmp.test';
file_put_contents($tmpFile, fopen($tLink, 'r'));
var_dump(readfile($tmpFile));
unlink($tmpFile);

/** @var \Directory $dir */
$dir = dir(__DIR__);
var_dump($dir->handle);
var_dump($dir->path);
while (false !== ($e = $dir->read())) {
	echo $e . PHP_EOL;
}
$dir->close();

echo PHP_EOL;
