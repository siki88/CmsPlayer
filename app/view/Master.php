<?php

//controll active session
$config = new Configure();

include_once('Header.phtml');

include_once(''.$config->getPage().'.php');

include_once('Footer.phtml');

?>
