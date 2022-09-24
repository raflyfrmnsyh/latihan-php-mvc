<?php

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];



    public function __construct()
    {
        $url = $this->parseURL();

        if ( $url == NULL )
        {
            $url = [$this->controller];
        }
        if ( file_exists('../applications/controller/' . $url[0] . '.php') )
        {
            $this->controller = $url[0];
            // var_dump($url);
            unset($url[0]);
        }
        require_once '../applications/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        // method
        if ( isset($url[1]) )
        {
             if ( method_exists($this->controller, $url[1]) ){
                $this->method = $url[1];
                unset($url[1]);
             }
        }
        // params
        if ( !empty($url) )
        {
            $this->params = array_values($url);
            // var_dump($url);
        }
        // jalankan controller controller dan method dan params jika ada

        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }

    public function parseURL()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}