<?php namespace App\Controllers;

    use App\Models\loginModel;

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

        $datosUsuario = $Usuario->obtenerUsuario(['nomu_usuario' => $usuario]);
        
        if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['pass_usuario'])){
            $data = [
                "nomu_usuario" => $datosUsuario[0]['nomu_usuario'],
                "tipo" => $datosUsuario[0]['tipo']
            ];
            $session = session();
            $session->set($data);
            return redirect()->to(base_url('/inicio'));
        } else{
            return redirect()->to(base_url('/'));
        }
    }
     
    public function salir(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}