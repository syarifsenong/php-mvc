<?php

class About
{

    public function index($nama, $pekerjaan) //ambil input params dari url
    {
        echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'about/page';
    }
}
