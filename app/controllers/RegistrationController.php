<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 2.1.2019
 * Time: 9:10
 */

class RegistrationController extends Controller{

    private $user;
    private $password;
    public static  $error = '';

    public function index($id='', $name=''){
        //call Controller->view
        $this->view('registration/index',[
            'name' => $name,
            'id' => $id
        ]);
        //call render methods on view class
        $this->view->page_title = 'home page';
        $this->view->render();
    }

    public function send(){

        if($this->security()){
            $this->sendRegistrationDB();
            $this->view('player/index');
            $this->view->render();
        }else{
            self::$error = 'V registraci jsou zakázané znaky';
            //call Controller->view
            $this->view('registration/index');
            $this->view->render();

        }


    }

    private function security(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $this->user = htmlentities(strip_tags($_POST['username']));
            $this->password = htmlentities(strip_tags($_POST['password']));
            if(($this->user == $_POST['username'])&&($this->password == $_POST['password'])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    private function sendRegistrationDB(){

    }

}