<?php namespace App\Database\Seeds;

class adminSeeder extends \CodeIgniter\Database\Seeder{

    public function run(){
        $data = [
            'nom_usuario' => 'Admin',
            'ape_usuario' => 'Vulpis',
            'nomu_usuario' => 'AdminVlpis',
            'email_usuario' => 'ludiuriel@gmail.com',
            'pass_usuario' => '1234vulpis'
        ];
        
        $this->db->table('usuarios')->insert($data);
    }
}