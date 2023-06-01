<?php namespace App\Models;
use CodeIgniter\Model;

class loginModel extends Model{

    public function obtenerUsuario($data){
        $Usuario = $this->db->table('usuarios');
        $Usuario->where('nomu_usuario',$data);
        return $Usuario->get()->getResultArray();
    }

    public function obtenerPassword($data){
        $Usuario = $this->db->table('usuarios');
        $Usuario->where('nomu_usuario',$data);
        return $Usuario->get()->getResultArray()[4];
    }

    public function mostrarUsuarios(){
        $usuarios = $this->db->query('SELECT * FROM usuarios');
        return $usuarios->getResult();
    }
} 