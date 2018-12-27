<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 25.12.2018
 * Time: 12:22
 */

class LoginController extends Controller {

    public function index($id='', $name=''){
        //call Controller->view
        $this->view('login/index',[
            'name' => $name,
            'id' => $id
        ]);
        //call render methods on view class
        $this->view->page_title = 'home page';
        $this->view->render();
    }


    public function loading($id='', $name=''){
        //call Controller->view
        $this->view('login/index',[
            'name' => $name,
            'id' => $id
        ]);
        //call render methods on view class
        $this->view->page_title = 'loading page';
        $this->view->render();
    }

    public function about(){
        $this->view('login/about',[]);
        //call render methods on view class
        $this->view->page_title = 'about page';
        $this->view->render();
    }

}