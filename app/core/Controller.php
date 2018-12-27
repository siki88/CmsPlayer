<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 26.12.2018
 * Time: 12:10
 */

class Controller {

    protected $view;
    protected $model;

    public function view($viewName, $data = []){
        $this->view = new View($viewName,$data);
        return $this->view;
    }
}