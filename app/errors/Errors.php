<?php
/**
 * Created by PhpStorm.
 * User: siki
 * Date: 19.12.2018
 * Time: 11:44
 */

class Errors {

    private $error;

    public function __construct($error){
        error_reporting(E_ALL | E_STRICT);
        $this->error = $error;
        echo($error);
    }
}

