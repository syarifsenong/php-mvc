<?php

class About extends Controller //inheritance dari class Controller
{

    public function index($nama = 'Syarif', $pekerjaan = 'Dev ') //ambil input params dari url
    {
        // echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
        $this->view('about/index'); //panggil view dar method view di class controller
    }

    public function page()
    {
        // echo 'about/page';
        $this->view('about/page'); //panggil view dar method view di class controller
    }
}
