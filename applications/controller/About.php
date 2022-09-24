<?php

class About extends Controller{
    public function index()
    {
        $data['nama'] = 'Rafly firmansyah';
        $data['title'] = 'About';
        
        $this->view('tamplates/_header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/_footer');

    }
    public function page()
    {
        $data['title'] = 'Page About';
        $this->view('tamplates/_header', $data);
        $this->view('about/page');
        $this->view('tamplates/_footer');
    }
}