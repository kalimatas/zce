<?php

// in-memory database
$dbh = new PDO('sqlite::memory:', null, null, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
));

$dbh->commit(); // fatal: no active transaction

$createTableQuery = <<<CREATE
	CREATE TABLE tmp (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL)
CREATE;
$dbh->exec($createTableQuery);

// insert data
$dbh->beginTransaction();
$stmt = $dbh->prepare("INSERT INTO tmp (name) VALUES (:name)");
$stmt->bindParam(':name', $name);
foreach (['first', 'second'] as $name) {
	$stmt->execute();
}
$dbh->commit();

// select
foreach ($dbh->query("SELECT * FROM tmp") as $row) {
	printf("id: %d, name: %s\n", $row['id'], $row['name']);
}

$dbh = null;

echo PHP_EOL;
