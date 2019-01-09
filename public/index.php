<?php

define('ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'app'.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR);
define('VIEW', ROOT.'app'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
define('DATA', ROOT.'app'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR);
define('MODEL', ROOT.'app'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR);
//COMPOSER AUTOLOADER
require_once "../vendor/autoload.php";

new Application();



?>


