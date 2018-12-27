<?php

define('ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'app'.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR);
define('VIEW', ROOT.'app'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
define('DATA', ROOT.'app'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR);
define('MODEL', ROOT.'app'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR);
//COMPOSER AUTOLOADER
require_once "../vendor/autoload.php";








new Application();
















/*

define('IN_CMS',true);

//include_once('../app/Configure.php');

require_once "../app/view/Master.php";

*/






















/*

echo('ATTRIBUTS');
echo('<pre>');
//var_dump($test->getAllConstant());
echo('</pre>');

echo('CONSTANT');
echo('<pre>');
var_dump($test->listAllConstant('DB_USER'));
var_dump($test->listAllConstant('DB_PASSWORD'));
echo('</pre>');
*/

/*
echo('PASSWORD HASH');
echo('<pre>');
$startAutoloader->setHash('SIKI');
var_dump($startAutoloader->getHash('SIKI'));
echo('</pre>');
*/

/*
echo('<pre>');
var_dump($test->listAllConstant());
echo('</pre>');
*/

/*
echo('<pre>');
var_dump($test->__get('NAME'));
echo('</pre>');
*/
//var_dump(constant("user"));

//$view = new MyView();
//var_dump($view);


