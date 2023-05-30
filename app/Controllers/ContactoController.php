<?php namespace App\Controllers;

    use App\Models\usuariosModel;

class ContactoController extends BaseController
{
    public function login()
    {
        echo view('Views/login');
    }

    public function inicio()
    {
        echo view('Views/header');
        echo view('Views/menu');
        echo view('Views/inicio');
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

    public function loginPost(){
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new loginModel();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])){

            $data = [
                "usuario" => $datosUsuario[0]['nomu_usuario'],
                "Type" => $datosUsuario[0]['type']

            ];
            $session = new session();
            $session->set($data);
            return redirect()->to(base_url('/inicio'));
        } else{
            return redirect()->to(base_url('/'));
        }
    }
}