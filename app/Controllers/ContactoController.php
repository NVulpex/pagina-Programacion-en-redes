<?php namespace App\Controllers;

    use App\Models\loginModel;
    use App\Models\registroModel;

class ContactoController extends BaseController
{
    public function login()
    {
        echo view('Views/login');
    }

    public function registro(){
        echo view('Views/registro');
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

    public function registroPost(){
        $data = $_POST;
        $login = new loginModel();
        $registro = new registroModel();

        if($login->obtenerUsuario(['nomu_usuario' => $data['usuario']]) > 0){
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $registro->crearUsuario($data['nombre'], $data['apellido'], $data['usuario'], $data['email'], $data['password']);
            return redirect()->to(base_url('/inicio'));
        }
        else
            echo("Usuario ya existente"."   ".$data);
    }

    public function loginPost(){
        $data = $_POST;
        $Usuario = new loginModel();
        $datosUsuario = $Usuario->obtenerUsuario(['email_usuario' => $data['usuario']]);
        $hash = $datosUsuario[0]['pass_usuario'];

        if(count($datosUsuario) > 0 && password_verify($data['password'], $hash)){
            $data = [
                "nomu_usuario" => $datosUsuario[0]['nomu_usuario'],
                "tipo" => $datosUsuario[0]['tipo']
            ];
            $session = session();
            $session->set($data);
            return redirect()->to(base_url('/inicio'));
        }else{
            echo($data['password']."///1///");
            echo($hash."////////////");
            echo(count($datosUsuario));
            echo(password_verify($data['password'],$hash));
            //return redirect()->to(base_url('/'));
        }
    }
     
    public function salir(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}