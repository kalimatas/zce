<?php

$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
//$doc->validateOnParse = true;
print_r($doc->saveXML());

$doc->load(__DIR__ . DIRECTORY_SEPARATOR . 'book.xml'); // warning if not exists
foreach ($doc->getElementsByTagName('*') as $item) {
	/** @var DOMElement $item */
	printf("%s, %s\n", $item->getNodePath(), $item->nodeType);
}

$xpath = new DOMXPath($doc);
$tbody = $doc->getElementsByTagName('tbody')->item(0);
$entities = $xpath->query('row/entry[. = "en"]', $tbody);

var_dump($entities->length); // 2

foreach ($entities as $en) {
	/** @var DOMElement $en */
	printf("%s by %s\n", $en->previousSibling->previousSibling->nodeValue, $en->previousSibling->nodeValue);
}

echo PHP_EOL;