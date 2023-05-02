<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_reporte' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'id_usu' =>[
                'type' => 'int'
            ],
            'id_prod' =>[
                'type' => 'int'
            ],
        ]);
        $this->forge->addKey('id_orden', true);
        $this->forge->addForeignKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->forge->createTable('reportes');
    }

    public function down(){
        $this->forge->dropTable('reportes');
    }
}