<?php
/**
 * Created by PhpStorm.
 * User: Programovani
 * Date: 26.12.2018
 * Time: 13:13
 */

class Application{

    protected $controller = 'LoginController';
    protected $action = 'index';
    protected $params = [];

    /**
     * Application constructor.
     */
    public function __construct(){
        $this->prepareURL();

        //EXTRA
/*
        echo('<br><pre>');
        var_dump($_SERVER['REQUEST_URI']);
        var_dump($this->controller);
        var_dump($this->action);
        var_dump($this->params);
        echo('</pre>');


        echo('<p>$this->controller</p><pre>');
        var_dump($this->controller);
        echo('</pre>');

        echo('<p>define controller</p><pre>');
        var_dump(CONTROLLER.$this->controller.'.php');
        echo('</pre>');
*/

        if(file_exists(CONTROLLER. $this->controller.'.php')){

            //create instance *Controller
            $this->controller = new $this->controller;

            //send param to *Controller
            if(method_exists($this->controller,$this->action)){
               call_user_func([$this->controller,$this->action], $this->params);
            }
        }else{
            $this->controller = new ErrorController();
        }

    }


    private function prepareURL(){
        $request = trim($_SERVER['REQUEST_URI'],'/');
        if(!empty($request)){
            $url = explode('/',$request);
            //send to attribute
            $this->controller = isset($url[0]) ? ucfirst($url[0]).'Controller' : 'LoginController';
            $this->action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0],$url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }

}