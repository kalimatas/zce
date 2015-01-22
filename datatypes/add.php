<?php

$xml = '<root />';

$doc = new DOMDocument();
$doc->formatOutput = true;
$doc->loadXML($xml);

$n = $doc->createElement('test', 'value');
$doc->appendChild($n); // add on the same level as 'root'

echo $doc->saveXML() . PHP_EOL;

$doc->documentElement->appendChild($n); // append to 'root'

echo $doc->saveXML();

$docNew = new DOMDocument();
var_dump($docNew->loadXML('')); // false and warning

echo PHP_EOL;
