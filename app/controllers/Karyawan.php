<?php

class Karyawan extends Controller
{

    public function index()
    {
        $data['judul'] = 'Data Karyawan';
        $data['kry'] = $this->model('Karyawan_model')->getAllKaryawan();
        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }
}
