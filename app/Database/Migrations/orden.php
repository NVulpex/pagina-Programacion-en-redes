<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migrations
{
    public function up(){
        $this->forge->addField([
            'id_orden' =>[
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
            'id_mp' =>[
                'type' => 'int'
            ],
            'total' =>[
                'type' => 'decimal',
                'constraint' => 10.2,
                'null' => false
            ],
        ]);
        $this->froge->addKey('id_orden', true);
        $this->froge->addForeingKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->froge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->froge->addForeignKey('id_mp', 'MetodoPago', 'id_MP', 'CASCADE', 'SET NULL');
        $this->froge->createTable('orden');
    }

    public function down(){
        $this->forge->dropTable('orden');
    }
}