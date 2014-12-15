<?php

session_save_path('/tmp');
session_start();
var_dump(session_id());
var_dump($_SESSION);

$var = "hello";
$pVar = &$var;
$_SESSION['var'] = $pVar;

echo PHP_EOL;
