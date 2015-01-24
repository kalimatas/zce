<?php

$fp = stream_socket_client("tcp://www.example.com:80", $errno, $errmsg);
if (!$fp) {
	echo $errmsg . PHP_EOL;
} else {
	fwrite($fp, "GET / HTTP/1.0\r\nHost: www.example.com\r\nAccept: */*\r\n\r\n");

	$filter = stream_filter_append($fp, 'string.toupper', STREAM_FILTER_READ);
	echo stream_get_contents($fp);
}

echo PHP_EOL;
