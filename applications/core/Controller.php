<?php

class Controller{
    public function view($view, $data = [])
    {
        require_once '../applications/views/' . $view . '.php';
    }
    public function model($model)
    {
        require_once '../applications/models/' . $model . '.php';
        return new $model;
    }
}