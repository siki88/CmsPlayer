<?php
/**
 * Created by PhpStorm.
 * User: siki
 * Date: 18.12.2018
 * Time: 13:26
 */


class Database {

    //for registration
    private $optionsPassword = [
        'memory_cost' => PASSWORD_ARGON2_DEFAULT_MEMORY_COST,
        'time_cost' => PASSWORD_ARGON2_DEFAULT_TIME_COST,
        'threads' => PASSWORD_ARGON2_DEFAULT_THREADS
    ];

    //info for connecting to DB
    //works php7.1 onwards
    /*
    private const HOSTNAME = 'localhost';
    private const __USERNAME = 'root';
    private const __PASSWORD = '';
    private const __DATABASE = 'cms';
    private const __PORT     = "3306";
    */

    private $__HOSTNAME = 'localhost',
            $__USERNAME = 'root',
            $__PASSWORD = '',
            $__DATABASE = 'cms',
            $__PORT     = "3306",
            $__OPTIONS  = [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_PERSISTENT => false,
                            PDO::ATTR_EMULATE_PREPARES => false,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
                          ];


    /**
     * Database constructor.
     * @param
     */
    public function __construct(){
        /**
         *	Find Database and Establish connection
         */
        try {
            $this->__CON = new PDO("mysql:host=".$this->__HOSTNAME.";port=".$this->__PORT.";dbname=".$this->__DATABASE.";charset=utf8mb4",$this->__USERNAME,$this->__PASSWORD,$this->__OPTIONS);
        }
            /**
             *	Error Message
             */
        catch (PDOException $__ERROR) {
            die($__ERROR->getMessage());
        }
    }

    public function selectUser($user){
        $smtp = $this->__CON -> prepare("SELECT * FROM user WHERE user=:user");
        $smtp -> execute(['user'=> $user]);
        $smtp->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $smtp->fetch();
        return $user;
    }




}