<?php

$dbh = new PDO('pgsql:host=localhost;dbname=json', 'kalimatas', '', array(
	PDO::ATTR_PERSISTENT => true,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // throw exceptions on errors
));

function throwException() {
	global $dbh;

	// will throw exception, bad syntax
	$dbh->exec("insert into author(name) values('first)");
}

$dbh->exec("insert into author(name) values('zero')");
var_dump($dbh->lastInsertId('author_id_seq')); // in postgresql

$dbh->beginTransaction();
try {
	//$dbh->exec("insert into author(name) values('first')");

	//throwException();

	$stmt = $dbh->prepare("insert into author(name) values(:name)");
	$stmt->bindParam(':name', $name); // uses reference
	$name = 'alex';
	//$stmt->execute();

	$dbh->commit();
} catch (PDOException $e) {
	$dbh->rollBack();

	var_dump($e->getTrace());

	throw $e;
}

foreach ($dbh->query("select * from author") as $author) {
	printf("id: %d, name: %s\n", $author['id'], $author['name']);
}

echo PHP_EOL;

$stmt = $dbh->query("select * from author");
$stmt->setFetchMode(PDO::FETCH_NUM);
foreach ($stmt as $author) {
	printf("id: %d, name: %s\n", $author[0], $author[1]);
}

echo PHP_EOL;
