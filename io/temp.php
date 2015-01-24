<?php

$fp = fopen("php://temp/maxmemory:1024", "r+");
fputs($fp, "stome string\n");
rewind($fp);

echo stream_get_contents($fp);

fclose($fp);

readfile("php://filter/read=string.toupper/resource=io/io.php");

echo PHP_EOL;
