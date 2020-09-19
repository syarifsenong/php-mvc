<?php

class Karyawan extends Controller
{

    public function index()
    {
        $data['judul'] = 'Data Karyawan';
        $this->view('templates/header', $data);
        $this->view('karyawan/index');
        $this->view('templates/footer');
    }
}
