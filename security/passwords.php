<?php

var_dump(PASSWORD_DEFAULT == PASSWORD_BCRYPT); // true

$password = 'hello';

// will be truncaged to 72 chars
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo $hashed . PHP_EOL;

var_dump(password_get_info($hashed));

var_dump(password_verify($password, $hashed));

echo PHP_EOL;
