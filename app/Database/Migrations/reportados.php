<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migrations
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
        $this->froge->addKey('id_orden', true);
        $this->froge->addForeingKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'SET NULL');
        $this->froge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->froge->createTable('reportes');
    }

    public function down(){
        $this->forge->dropTable('reportes');
    }
}