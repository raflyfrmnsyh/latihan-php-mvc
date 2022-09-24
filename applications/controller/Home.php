<?php

class Home extends Controller{

    public function index()
    {
        // echo 'Home/index';
        $data['title'] = 'Beranda';
        $this->view('tamplates/_header', $data);
        $this->view('home/index');
        $this->view('tamplates/_footer');
    }
}