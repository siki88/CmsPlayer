<?php
/**
 * Created by PhpStorm.
 * User: siki
 * Date: 18.12.2018
 * Time: 13:26
 */


final class Database {

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
                          //  PDO::ATTR_EMULATE_PREPARES => false,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //PDO::FETCH_OBJ,
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

    public function getLoadingDB($table){
        return $this->loading($table);
    }

    private function loading($table){
        $user = 'user';
        $smtp = $this->__CON -> prepare("SELECT * FROM music");
        $smtp -> execute(['user'=> $user]);
        //$smtp->setFetchMode(PDO::FETCH_CLASS, 'Music');
        $user = $smtp->fetchAll(PDO::FETCH_CLASS, "Music");
        return $user;
    }


}