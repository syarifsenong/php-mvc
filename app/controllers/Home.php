<?php

class Home
{
    public function index()
    {
        //manggil file yg ada difolder views, home, dan file index.php
        $this->view('home/index');
    }
}
