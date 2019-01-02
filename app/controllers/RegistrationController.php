<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 2.1.2019
 * Time: 9:10
 */

class RegistrationController extends Controller{

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

}