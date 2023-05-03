<?php namespace App\Controllers;

use App\Models\usuariosModel;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function contacto(){
        $usuarios = new usuariosModel();
        $datos = $usuarios->mostrarUsuarios();
        print_r($datos);
    }
}
