<?php

class J implements JsonSerializable {
	public $a = 1;
	public $b = 2;

	public function jsonSerialize() {
		return $this->a;
	}
}

// only $a
var_dump(json_encode(new J));

$c = curl_init();
var_dump(json_encode($c)); // false, resources are not supported

$a1 = array(1, 2, 3);
var_dump(json_encode($a1)); // not object
var_dump(json_encode($a1, JSON_FORCE_OBJECT));

unset($a1[1]);
var_dump(json_encode($a1)); // now it's an object, nonsequential

var_dump(json_encode(1, JSON_FORCE_OBJECT)); // just "1"

$valid = '{"key": "value", "flag": true, "empty": null}';
$validDecoded = json_decode($valid);
var_dump($validDecoded); // stdClass
$validDecodedArray = json_decode($valid, true);
var_dump($validDecodedArray); // array
var_dump(json_last_error()); // 0
var_dump(json_last_error_msg()); // "No Error"

$notValid = '{"key": "value}';
$notValidDecoded = json_decode($notValid);
var_dump(json_last_error());
var_dump(json_last_error_msg()); // "Syntax Error"

echo PHP_EOL;
