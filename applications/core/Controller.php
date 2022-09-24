<?php

class Controller{
    public function view($view, $data = [])
    {
        require_once '../applications/views/' . $view . '.php';
    }
}