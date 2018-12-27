<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 21.12.2018
 * Time: 9:59
 */




/**
 * NEPOUZIVANA STRANKA - POUZE NA POZNAMKY
 */




define('SERVER_NAME',$_SERVER['SERVER_NAME']);

    //for registration
    private $optionsPassword = [
        'memory_cost' => PASSWORD_ARGON2_DEFAULT_MEMORY_COST,
        'time_cost' => PASSWORD_ARGON2_DEFAULT_TIME_COST,
        'threads' => PASSWORD_ARGON2_DEFAULT_THREADS
    ];

class Configure {

    private $page = 'Login';

    /**
     * Controller constructor.
     */
    public function __construct(){
        $this->sessionStatus();
    }

    /**
     * @return mixed
     */
    public function getPage(){
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void{
        $this->page = $page;
    }


    public function __set($name,$value){
        return $this->setPage($value);
    }


    public function __get($path){
        return $this->getPage();
    }


    //FOR LOGIN AND UNLOGIN USER
    private function sessionStatus(){
        if (session_status() == PHP_SESSION_ACTIVE) {
            echo 'Session is active';
        }elseif(session_status() == PHP_SESSION_NONE){
            echo 'Session start';
            session_start();
        }
    }



    /*
    public function loginController($username,$password){
        $login = new LoginController($username,$password);
        $login->selectUser();
    }
    */



    /**
     * Controll activate session
     */
    /*
    public static function set($data){
        if (session_status() == PHP_SESSION_ACTIVE) {
            echo 'Session is active';
        }elseif(session_status() == PHP_SESSION_NONE){
            echo 'Activate session';
            session_start();
        }
    }
    */



/*

    public static function get($data){

        if(isset($data){

        }

        if (session_status() == PHP_SESSION_ACTIVE) {
            echo 'Session is active';
        }elseif(session_status() == PHP_SESSION_NONE){
            echo 'Activate session';
            session_start();

        }



        return('Login');
    }

    private function sessionStatus(){

    }


*/

    /*
    public static function setSession($data) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }


    public static function getSession($key) {
        return $_SESSION[$key];
    }
    */

    /**
     * START AUTOLOADER
     */
    /*
    private function startAutoloader(){
        spl_autoload_register(function ($class_name) {
            try {
                include $class_name.'.php';
            } catch (Exception $e) {
                echo 'spl_autoload_register : ',  $e->getMessage(), "\n";
            }
        });
    }
    */
/*
    public function classLoader($class){

    }


    public function __get($index){
        // TODO: Implement __get() method.
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }
    */
}



