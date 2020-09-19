<?php

class Home extends Controller //inheritance dari class Controller
{
    public function index()
    {
        $data['judul'] = 'Home'; //kirim judul ke view header
        //manggil file yg ada difolder views, home, dan file index.php
        $this->view('templates/header', $data); //manggil template header
        $this->view('home/index');
        $this->view('templates/footer'); //manggil template footer
    }
}
