<?php

// Finds the length of the initial segment of a string consisting
// entirely of characters contained within a given mask

var_dump(strspn('42 feoi', '09123465')); // 2
// not
var_dump(strcspn('42 feoi', 'f')); // 3

$email = 'user@domain.org';

echo strstr($email, '@') . PHP_EOL; // @domain.org
echo strstr($email, '@', true) . PHP_EOL; // user

$email = 'user@domain.org@another';
echo strrchr($email, '@') . PHP_EOL; // @another, last occurence

echo "5) " . var_export(substr(false, 0, 1), true) . PHP_EOL; // false -> ""

echo PHP_EOL;
