<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migrations
{
    public function up(){
        $this->forge->addField([
            'id_carrito' =>[
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
            'cantidad' =>[
                'type' => 'int',
                'null' => false
            ],
        ]);
        $this->froge->addKey('id_carrito', true);
        $this->froge->addForeingKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->froge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->froge->createTable('carrito');
    }

    public function down(){
        $this->forge->dropTable('carrito');
    }
}