<?php

class Siswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->model('M_siswa')->getAllSiswa();

        $this->view('tamplates/_header', $data);
        $this->view('siswa/index', $data);
        $this->view('tamplates/_footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Siswa';
        $data['siswa'] = $this->model('M_siswa')->getSiswaById($id);

        $this->view('tamplates/_header', $data);
        $this->view('siswa/detail', $data);
        $this->view('tamplates/_footer');
    }
}