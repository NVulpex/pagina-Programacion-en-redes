<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migrations
{
    public function up(){
        $this->forge->addField([
            'id_producto' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'nom_producto' =>[
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'precio_producto' =>[
                'type' => 'decimal',
                'constraint' => 10.2,
                'null' => false
            ],
            'info_producto' =>[
                'type' => 'text'
            ],
        ]);
        $this->froge->addKey('id_producto', true);
        $this->froge->createTable('productos');
    }

    public function down(){
        $this->forge->dropTable('productos');
    }
}