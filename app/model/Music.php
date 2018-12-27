<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 27.12.2018
 * Time: 12:56
 */

class Music{

    protected static $data_file;
    protected $inventory = [];

    /**
     * Music constructor.
     */
    public function __construct(){
        //alternative data with file
        //self::$data_file = DATA . 'music.txt';
    }

    private function load(){
        $database = new Database();
        $this->inventory = $database->getLoadingDB('music');

        //alternative data with file
//        if(file_exists(DATA . 'music.txt')){
//            $this->inventory = file(DATA . 'music.txt');
//        }

    }

    public function getMusic(){
        $this->load();
        return $this->inventory;
    }


}