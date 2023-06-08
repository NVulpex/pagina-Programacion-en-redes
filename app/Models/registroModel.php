<?php namespace App\Models;
use CodeIgniter\Model;

class registroModel extends Model{

    public function crearUsuario($nombre, $apellido, $usuario, $email, $password){
        $datos = [
            'nom_usuario' => $nombre,
            'ape_usuario' => $apellido,
            'nomu_usuario' => $usuario,
            'email_usuario' => $email,
            'pass_usuario' => $password,
            'tipo' => "comun"
        ];
        
        $this->db->table('usuarios')->insert($datos);
    }
} 