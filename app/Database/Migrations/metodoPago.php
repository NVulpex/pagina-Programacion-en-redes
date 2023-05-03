<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migrations
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
        $this->froge->addKey('id_MP', true);
        $this->froge->createTable('metodoPago');
    }

    public function down(){
        $this->forge->dropTable('metodoPago');
    }
}