<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class orden extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_orden' =>[
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
            'id_mp' =>[
                'type' => 'int',
                'null' => true
            ],
            'total' =>[
                'type' => 'decimal',
                'constraint' => 10.2,
                'null' => false
            ],
        ]);
        $this->forge->addKey('id_orden', true);
        $this->forge->addForeignKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('id_mp', 'MetodoPago', 'id_MP', 'CASCADE', 'SET NULL');
        $this->forge->createTable('orden');
    }

    public function down(){
        $this->forge->dropTable('orden');
    }
}
