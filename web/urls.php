<?php

$url = 'http://h.ru?value=hello me-and_underscore.dot~!';
var_dump(urlencode($url));
var_dump(rawurlencode($url));

// cannot use | to get several values
var_dump(parse_url($url, PHP_URL_QUERY));
print_r(parse_url($url));

class T {
	protected $pr = 42;
	public $pub = 'string+';
}
// public only
var_dump(http_build_query(new T));

echo PHP_EOL;
