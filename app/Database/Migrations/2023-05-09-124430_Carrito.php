<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class carrito extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_carrito' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'id_usu' =>[
                'type' => 'int',
                'null' => true
            ],
            'id_prod' =>[
                'type' => 'int',
                'null' => true
            ],
            'cantidad' =>[
                'type' => 'int',
                'null' => false
            ],
        ]);
        $this->forge->addKey('id_carrito', true);
        $this->forge->addForeignKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->forge->createTable('carrito');
    }

    public function down(){
        $this->forge->dropTable('carrito');
    }
}