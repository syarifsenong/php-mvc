<?php
//class ini adalah kelas utama yg beda dengan class yg ada di folder controllers
//class yg ada di folder controllers akan extends ke class ini
class Controller
{
    //method yg dipake di controller Home
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
