<?php

$xml = '<root />';

$doc = new DOMDocument();
$doc->loadXML($xml);

$n = $doc->createElement('test', 'value');
$doc->appendChild($n); // add on the same level as 'root'

print_r($doc->saveXML());

echo PHP_EOL;
