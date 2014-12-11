<?php

$dbh = new PDO('pgsql:host=localhost;dbname=json', 'kalimatas', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // throw exceptions on errors
));

$stmt = $dbh->prepare("select * from author where name = :name");
$stmt->bindValue(':name', 'first', PDO::PARAM_STR);
//$stmt->debugDumpParams();
$stmt->execute();

printf("column count: %d\n", $stmt->columnCount());
var_dump($stmt->errorInfo());

// iterate over statement
foreach ($stmt as $row) {
	printf("id: %d, name: %name\n", $row['id'], $row['name']);
}

echo PHP_EOL;

$stmt = $dbh->prepare("select * from empty");
$stmt->execute();
var_dump($stmt->fetch()); // false

// bindColumn
$stmt = $dbh->prepare("select id, name from author limit 3");
$stmt->execute();
$stmt->bindColumn('id', $id, PDO::PARAM_INT);
$stmt->bindColumn('name', $name, PDO::PARAM_STR);
while ($stmt->fetch(PDO::FETCH_BOUND)) {
	printf("id: %d, name: %name\n", $id, $name);
}

$stmt->execute();
var_dump($stmt->fetch(PDO::FETCH_LAZY)); // PDORow object

// group
$stmt = $dbh->prepare("select name, id from author");
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP)); // grouped by name

echo PHP_EOL;
