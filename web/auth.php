<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	echo 'Enter your password!';
	die();
} else {
	var_dump($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
}
