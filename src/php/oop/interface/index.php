<?php

require_once 'eva.php';
require_once 'robot.php';

use abs\robot\Eva;

$eva = new Eva('シンジ');
$eva->stand()->sit()->walk();