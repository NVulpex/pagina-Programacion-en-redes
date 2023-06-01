<?php namespace App\Database\Seeds;

class usuarioSeeder extends \CodeIgniter\Database\Seeder{

    public function run(){
        $nombre = "Uriel";
        $apellido = "Ludi";
        $usuario = "admin";
        $email = "TVulpis@gmail.com";
        $password = password_hash("admin", PASSWORD_DEFAULT);
        $tipo = "admin";
        
        $data = [
            'nom_usuario' => $nombre,
            'ape_usuario' => $apellido,
            'nomu_usuario' => $usuario,
            'email_usuario' => $email,
            'pass_usuario' => $password,
            'tipo' => $tipo
        ];
        
        $this->db->table('usuarios')->insert($data);
    }
}