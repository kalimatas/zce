<?php

/** @var SimpleXMLElement $movies */
$movies = simplexml_load_file(__DIR__ . DIRECTORY_SEPARATOR . 'example.xml');
print_r((string) $movies->movie->plot);

foreach ($movies->movie->characters->character as $character) {
	printf("%s by %s\n", $character->name, $character->actor);
}

libxml_use_internal_errors(true);
$no = simplexml_load_file('no_such_file.xml');
if ($no === false) {
	print_r(libxml_get_errors());
}
libxml_use_internal_errors(false);

// import from DOM
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->load(__DIR__ . DIRECTORY_SEPARATOR . 'example.xml');
$mov = simplexml_import_dom($doc);

// no spaces
foreach ($mov->movie->characters->character as $character) {
	printf("%s by %s\n", $character->name, $character->actor);
}

// first rating attribute
$rating = $mov->movie[0]->rating[0];
printf("%s, %d\n", $rating['type'], $rating); // thumbs, 7

// add elements and attrs
/** @var SimpleXMLElement $newRating */
$newRating = $mov->movie->addChild('rating', 'PG');
$newRating->addAttribute('type', 'mpaa');
//print_r($mov->asXML());

echo PHP_EOL;
