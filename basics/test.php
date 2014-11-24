<?php

define('CONSTANT', 1);
define('_CONSTANT', 0);

var_dump(!((boolean) _CONSTANT));

/*
 syntax error: EMPTY is a function
define('EMPTY', '');
if (!empty(EMPTY)) {

}
else if {

}
*/
