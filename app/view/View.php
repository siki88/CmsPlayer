<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 26.12.2018
 * Time: 14:52
 */

class View {

    protected $view_file;
    protected $view_data;

    /**
     * View constructor.
     * @param $view_file
     * @param $view_data
     */
    public function __construct($view_file, $view_data){
        $this->view_file = $view_file;
        $this->view_data = $view_data;
    }


}