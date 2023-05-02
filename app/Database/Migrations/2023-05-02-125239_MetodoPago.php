<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class usuarios extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_MP' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'nombre' =>[
                'type' => 'varchar',
                'constraint' => 30
            ],
        ]);
        $this->forge->addKey('id_MP', true);
        $this->forge->createTable('metodoPago');
    }

    public function down(){
        $this->forge->dropTable('metodoPago');
    }
}