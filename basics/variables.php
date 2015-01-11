<?php

setcookie('test[one]', 'one');
setcookie('test[two]', 'two');

echo '<pre>';

$привет = "hello";
echo $привет . PHP_EOL;

$unset_str .= 'abc'; // notice
var_dump($unset_str);

$unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
var_dump($unset_arr);

$unset_obj->foo = 'bar'; // warning, but works
var_dump($unset_obj);

/* superglobals */
echo $_SERVER['PHP_SELF'] . PHP_EOL; // basics/variables.php (from root)
var_dump($_SERVER['argv']);
var_dump($_GET);

setcookie('test', 'test_value');
var_dump($_COOKIE);
var_dump($_REQUEST);
var_dump($_ENV);

var_dump($argc);

//static $i = 1 + 1; // syntax error
static $a = 0;
$a++;
echo $a . PHP_EOL;

//static $i = 1 + 2; // error, no expressions

$a = 'hello';
$$a = 'world';

echo "$a ${$a}" . PHP_EOL; // hello world
//echo 'char: ' . $$a[1] . PHP_EOL; // undefined variable 'e'

class A {
	public $hello = true;
}

var_dump((new A())->$a); // true -> A->hello
//var_dump((new A())->$b); // Fatal error: Cannot access empty property
var_dump((new A())->$hello); // null, A->world

$s = '_SERVER';
//var_dump($$s); // works

function test() {
	$s = '_SERVER';
	var_dump($$s); // notice: undefined variable; cannot use inside functions
}
test();

if ($_POST) {
	var_dump($_POST);
}

?>

<form action="" method="post">
	<input name="a.b" />
	<input type="image" src="/zce/basics/01_02_small.jpg" name="sub" />
</form>

<?php

echo PHP_EOL;
