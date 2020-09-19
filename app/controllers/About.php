<?php

class About extends Controller //inheritance dari class Controller
{

    public function index($nama = 'Syarif', $pekerjaan = 'Dev ') //ambil input params dari url
    {
        //declare params untuk dikirim ke view index
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        // echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
        $this->view('templates/header'); //manggil template header
        $this->view('about/index', $data); //panggil view dar method view di class controller
        $this->view('templates/footer'); //manggil template footer
    }

    public function page()
    {
        // echo 'about/page';
        $this->view('templates/header'); //manggil template header
        $this->view('about/page'); //panggil view dar method view di class controller
        $this->view('templates/footer'); //manggil template footer
    }
}
