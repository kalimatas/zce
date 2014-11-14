<?php

if (true) {
	//const HELLO = 13; // parse error: cannot declare inside function
	define('Hello', 13);
}

echo __LINE__ . PHP_EOL; // The current line number of the file.
echo __line__ . PHP_EOL;

echo __FILE__  . PHP_EOL; // The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
echo __DIR__  . PHP_EOL; // The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
echo __FUNCTION__  . PHP_EOL; // The function name.
echo __CLASS__  . PHP_EOL;	//The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). Note that as of PHP 5.4 __CLASS__ works also in traits. When used in a trait method, __CLASS__ is the name of the class the trait is used in.
echo __TRAIT__  . PHP_EOL;	//The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
echo __METHOD__ . PHP_EOL; 	//The class method name.
echo __NAMESPACE__  . PHP_EOL;	//The name of the current namespace.
var_dump(__NAMESPACE__);

trait T
{
	public function name() {
		echo __TRAIT__ . PHP_EOL;
		echo __CLASS__ . PHP_EOL; // name of the class using trait
	}

	public static function staticName() {
		echo __CLASS__ . PHP_EOL; // name of the class using trait
	}
}

class Atrait
{
	use T;
}

(new Atrait())->name();
Atrait::staticName();
