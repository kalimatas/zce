<?php

echo '<pre>';
session_save_path('/tmp');
session_start();
var_dump('SID: ' . SID);
var_dump('session_id: ' . session_id());
var_dump($_SESSION);
var_dump($_COOKIE);

$var = "hello";
$pVar = &$var;
$_SESSION['var'] = $pVar;

echo PHP_EOL;
