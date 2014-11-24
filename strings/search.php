<?php

// Finds the length of the initial segment of a string consisting
// entirely of characters contained within a given mask

var_dump(strspn('42 feoi', '09123465')); // 2
// not
var_dump(strcspn('42 feoi', 'f')); // 3

echo PHP_EOL;
