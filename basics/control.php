<?php

{
	$a = 42;
}

var_dump($a); // 42

if ($a == 10) {
	//
} else if ($a == 1) {
	//
} else if ($a == 2) {
	//
} elseif ($a == 42) {
	echo 'yes' . PHP_EOL;
}

/* Incorrect Method: */
/*
if($a > $b):
	echo $a." is greater than ".$b;
else if($a == $b): // Will not compile. Need elseif
	echo "The above line causes a parse error.";
endif;
*/

?>

<?php switch ($a): ?>
<?php case 42: // won't work with indent ?>
		hello 42
<?php endswitch; ?>

<?php

for (; false, true; ) { // only the last is used
	echo 'inside for' . PHP_EOL;
	break;
}

$arr = array(1, 2, 3);
for ($i = 0, $size = count($arr); $i < $size; ++$i) {
	echo $arr[$i] . PHP_EOL;
}

echo 'size:' . $size . PHP_EOL; // still exists

//foreach ($unknown as $value) {} // invalid argument supplied for foreach

foreach ($arr as $value) {
	$value *= 2;
}

echo $value . PHP_EOL; // still exists

foreach ($arr as &$value) {
	$value *= 2;
}
echo $value . PHP_EOL; // still exists
unset($value);

foreach (array(1, 2, 3, 4) as &$value) {
	$value = $value * 2;
}

echo $value . PHP_EOL;

//if (true) break; // fatal: cannot break 1 level

$t = [
	[1, 2],
	[3, 4],
];

foreach ($t as list($first, $second)) {
	echo $first . ', ' . $second . PHP_EOL;
}

$ta = array(1, 2, 3, 4);
while (list(, $val) = each($ta)) {
	echo $val . ' ';
}
echo PHP_EOL;

// will print nothing - need manual reset
while (list(, $val) = each($ta)) {
	echo $val . ' ';
}
echo PHP_EOL;

for( $i = 0; $i < 3; ++ $i ) {
	echo ' [', $i, '] ';
	switch($i) {
		case 0: echo 'zero'; break;
		case 1: echo 'one' ; continue 2;
		case 2: echo 'two' ; break;
	}
	echo ' <' , $i, '> ';
}

echo PHP_EOL;

switch ($a) {
	default;
		echo 'inside default' . PHP_EOL;
		break;
	case 10;
		break;
	case 22 + 20;
		echo 'inside 42' . PHP_EOL;
		break;
}

switch (true) {
	case $a == 13:
		break;
	case $a == 43:
		echo 'using switch true' . PHP_EOL;
		break;
	default:
		echo 'inside true default' . PHP_EOL;
}

$mixed = 0;
switch ($mixed) {
	case NULL: echo "NULL";  break; // outputs
	case 0: echo "zero";  break;
	default: echo "other"; break;
}
echo PHP_EOL;

//return(); // no argument error

$r = 10;
function incr(&$param) {
	$param++;
	return ($param); // will return the value of $param, not the reference!
}
$r1 = incr($r);
echo $r . PHP_EOL; // 11
echo $r1 . PHP_EOL; // 11

$r1++;
echo $r . PHP_EOL; // 11
echo $r1 . PHP_EOL; // 12

echo PHP_EOL;
