<?php
/**
 * Created by PhpStorm.
 * User: siki
 * Date: 19.12.2018
 * Time: 14:24
 */

class PlayerController extends Controller {



    public function index($id='', $name=''){
        $this->model('music');
        $this->view('player'.DIRECTORY_SEPARATOR.'index');
        //call render methods on view class
        $this->view->render();
        var_dump($this->model->getMusic());
    }

    public function add($id='', $name=''){
        //call Controller->view
        $this->view('player'.DIRECTORY_SEPARATOR.'add');
        //call render methods on view class
        $this->view->render();
    }

}