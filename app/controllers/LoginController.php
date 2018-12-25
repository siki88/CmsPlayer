<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 25.12.2018
 * Time: 12:22
 */

class LoginController{

    private $username;
    private $password;


    /**
     * LoginController constructor.
     */
    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    private function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    private function setPassword($password): void
    {
        $this->password = $password;
    }

    public function selectUser(){
        $user = new Database();
        $backUser =$user->selectUser($this->username);
        var_dump($backUser);

    }


}