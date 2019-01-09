<?php
/**
 * Created by PhpStorm.
 * User: siki
 * Date: 19.12.2018
 * Time: 14:24
 */

class PlayerController extends Controller {

    public $musicFile = [];

    public function index($id='', $name=''){
        $this->model('music');
        $this->view('player'.DIRECTORY_SEPARATOR.'index', $this->model->getMusic());
        //call render methods on view class
        $this->view->render();
    }

    public function add($id='', $name=''){
        //call Controller->view
        $this->view('player'.DIRECTORY_SEPARATOR.'add');
        //call render methods on view class
        $this->view->render();
    }

    public function searchMusic(){
        foreach (glob("audio/*.mp3") as $filename) {
            array_push($this->musicFile,$filename);
        }
        return $this->musicFile;
    }

}