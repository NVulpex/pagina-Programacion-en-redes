<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        echo view('Views/header');
        echo view('Views/menu');
        echo view('Views/Index');
    }

    public function celular()
    {
        echo view('Views/header2');
        echo view('Views/menu');
        echo view('Views/Celular');
    }

    public function computadora()
    {
        echo view('Views/header2');
        echo view('Views/menu');
        echo view('Views/Computadora');
    }

    public function robotica()
    {
        echo view('Views/header2');
        echo view('Views/menu');
        echo view('Views/Robotica');
    }

    public function tablet()
    {
        echo view('Views/header2');
        echo view('Views/menu');
        echo view('Views/Tablet');
    }

    public function gabinete()
    {
        echo view('Views/header2');
        echo view('Views/menu');
        echo view('Views/Gabinete');
    }
}