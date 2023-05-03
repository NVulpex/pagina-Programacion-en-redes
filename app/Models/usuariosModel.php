<?php namespace App\Models;
use CodeIgniter\Model;

class usuariosModel extends Model{

    public function obtenerUsuario($data){
        $Usuario = $this->db->table('usuarios');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

    public function mostrarUsuarios(){
        $usuarios = $this->db->query('SELECT * FROM usuarios');
        return $usuarios->getResult();
    }
}