<?php

$url = 'google.com';

$ch = curl_init();
var_dump($ch); // resource(4) of type (curl)
//$clone = clone $ch; fatal
$clone = curl_copy_handle($ch); // ok

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// adds options, not replaces
curl_setopt_array($ch, [
	CURLOPT_URL => $url,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HEADER => true,
	CURLOPT_NOBODY => true, // HEAD method
	CURLOPT_VERBOSE => true,
]);

$result = curl_exec($ch);
print_r(curl_error($ch));
print_r(curl_getinfo($ch));
print_r($result);

curl_close($ch);
var_dump($ch); // resource(4) of type (Unknown)

echo PHP_EOL;
