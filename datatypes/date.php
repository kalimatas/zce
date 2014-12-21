<?php

$interval = new DateInterval("P2DT5M");
print_r($interval->format('%Y-%m-%d %H-%i-%s'));

echo PHP_EOL;

// the same
$newInterval = DateInterval::createFromDateString('2 days 5 minutes');
print_r($newInterval->format('%Y-%m-%d %H-%i-%s'));

echo PHP_EOL;

echo date('jS') . PHP_EOL;
echo date(DATE_RFC2822) . PHP_EOL;

$timeZone = new DateTimeZone('Europe/Moscow');
$offset = $timeZone->getOffset(new DateTime());

echo date('Y-m-d H:i:s', mktime(25, 65)) . PHP_EOL; // jump to the next period

echo strftime('%G-%B-%A', strtotime('next day')) . PHP_EOL;

try {
	new DateTime('invalid string date');
} catch (Exception $e) {
	print_r(DateTime::getLastErrors());
}

$dt = new DateTime();
$dt->setDate($dt->format('Y'), $dt->format('m'), date('d', strtotime('last day of december')));
var_dump($dt->format('Y-m-d H:i:s'));

$i = new DateInterval('P1M');
$dt->add($i);
var_dump($dt->format('Y-m-d H:i:s'));
$dt->add($i);
var_dump($dt->format('Y-m-d H:i:s')); // 2015-03-03 19:22:56 ?


echo PHP_EOL;
