<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 26.12.2018
 * Time: 15:21
 */

class ErrorController extends Controller {


    /**
     * ErrorController constructor.
     */
    public function __construct(){
        echo('<h1>404</h1>');
    }

    public function index(){
        echo('<h1>404 index</h1>');
    }

}