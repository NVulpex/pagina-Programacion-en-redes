<?php namespace App\Models;
use CodeIgniter\Model;

class registroModel extends Model{

    public function crearUsuario($data){
        $datos = [
            'nom_usuario' => $data['nombre'],
            'ape_usuario' => $data['apellido'],
            'nomu_usuario' => $data['usuario'],
            'email_usuario' => $data['email'],
            'pass_usuario' => $data['password'],
            'tipo' => $data['tipo']
        ];
        
        $this->db->table('usuarios')->insert($data);
    }
} 