<?php

class Home extends Controller{

    public function index()
    {
        // echo 'Home/index';
        $data['title'] = 'Beranda';
        $data['nama'] = $this->model('M_user')->getUser();

        $this->view('tamplates/_header', $data);
        $this->view('home/index', $data);
        $this->view('tamplates/_footer');
    }
}