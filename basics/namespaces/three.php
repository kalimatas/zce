<?php

namespace three;

require_once 'one.php';

use one;
use one\two\OneTwo;
use one\two\Another as Three;
use one\two as four;

$c0 = new one\two\OneTwo();
$c = new OneTwo();
$c1 = new four\OneTwo();
$c2 = new Three();
//$c3 = new namespace\Three(); three\Three

