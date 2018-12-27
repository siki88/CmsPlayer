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
        $this->view('login\index',[
            'name' => $name,
            'id' => $id
        ]);

        echo('INDEX<pre>');
        var_dump($this);
//        var_dump($this->view_data['id']);
        echo('</pre>');

    }










    public function siki($id='', $name=''){

        $this->view('login/index',[
            'name' => $name,
            'id' => $id
        ]);

        echo('SIKI<pre>');
//        var_dump($this->view_data['name']);
        var_dump($this);
        echo('</pre>');

    }

}