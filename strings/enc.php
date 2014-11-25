<?php

$str = 'привет';

echo mb_detect_encoding($str) . PHP_EOL;
echo $str . PHP_EOL;
echo strlen($str) . PHP_EOL;
echo grapheme_strlen($str) . PHP_EOL;

echo mb_internal_encoding() . PHP_EOL;

echo mb_convert_encoding($str, 'utf-8', 'windows-1251') . PHP_EOL;

echo PHP_EOL;
