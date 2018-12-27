<?php
/**
 * Created by PhpStorm.
 * User: siki
 * Date: 19.12.2018
 * Time: 14:24
 */

class PlayerController extends Controller {

    public function index($id='', $name=''){
        //call Controller->view
        $this->view('player/index',[
            'name' => $name,
            'id' => $id
        ]);
        //call render methods on view class
        $this->view->render();
    }

}