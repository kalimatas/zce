<?php

var_dump(php_sapi_name());
var_dump(get_current_user());
var_dump(getenv('SHELL'));

$opts = getopt("f:o", array("do:"));
var_dump($opts);

var_dump(php_ini_loaded_file());

var_dump(PHP_OS);
var_dump(php_uname());

echo PHP_EOL;
