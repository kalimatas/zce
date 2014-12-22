<?php

$xml = <<< 'X'
<root>
	<parent name="Peter">
		<child age="20">James</child>
		<child age="5">Leila</child>
	</parent>
	<parent name="Anna">
		<child age="10">Dido</child>
		<child age="11">George</child>
	</parent>
</root>
X;

$doc = new SimpleXMLElement($xml);
$teens = $doc->xpath('*/child[@age>9]');
var_dump((string) $teens[1]);

// case-sensitive

$parents = $doc->xpath('//parent');
var_dump($parents);

echo PHP_EOL;
