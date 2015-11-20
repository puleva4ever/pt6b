<?php

// developer mode ON, change when finished
ini_set('display_errors',1);

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);

define('APP',ROOT.'app'.DS);
define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));

require 'sys/main.php';
Main::init();

?>