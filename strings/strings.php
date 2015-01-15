<?php

$str = 'test string hello';

//echo addcslashes('hel.lo', 'h..A') . PHP_EOL; // \hel\.lo and warning
echo bin2hex('Ñ') . PHP_EOL;
echo hex2bin('c391') . PHP_EOL;

echo ord('Б') . PHP_EOL; // 208

echo chunk_split($str, 10, PHP_EOL);
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");
echo convert_uuencode(hex2bin('c391')) . PHP_EOL;

if (strlen(count_chars("hello", 3)) != strlen("hello")) {
	echo "'hello' contains non-unique chars!" . PHP_EOL;
}

$checksum = crc32("The quick brown fox jumped over the lazy dog.");
$numPrinted = printf("%u\n", $checksum);
echo 'numPrinted: ' . $numPrinted . PHP_EOL;

var_dump(explode(' ', $str, -1)); // no last hello
//var_dump(explode('', $str)); // false and warning
var_dump(implode([1,2,3]));
//var_dump(implode(',', 'hello')); // null and warning

//var_dump(localeconv()); // nl_langinfo($item)
var_dump(ltrim('  	fewhoi fe', 'f')); // will not remove whitespace
var_dump(ltrim('hello', 'helo')); // ""

echo md5("hello") . PHP_EOL;
echo md5("hello", true) . PHP_EOL;

echo number_format(123298232.23423, 3) . PHP_EOL; // 123,298,232

echo str_pad('ab', 4, '_', STR_PAD_BOTH) . PHP_EOL; // __ab__
echo str_pad('ab', 5, '_', STR_PAD_BOTH) . PHP_EOL; // __ab___

//str_repeat('_', -1) . PHP_EOL; // warning

echo strlen('Ñ') . PHP_EOL; // 2
echo iconv_strlen('Ñ') . PHP_EOL; // 2

// formatting
printf("%b\n", 8); // 1000
printf("%'_20s\n", "hello"); // _______________hello
printf("%.3e\n", 28784232); // 2.878e+7
printf('hello %2$-\'#10s and %1$10s bye %3$s', 'one', 'two', PHP_EOL); // hello two####### and        one bye

var_dump(sscanf("2.878e+7", "%e"));

echo str_repeat("-=", "5") . PHP_EOL;

echo PHP_EOL;
