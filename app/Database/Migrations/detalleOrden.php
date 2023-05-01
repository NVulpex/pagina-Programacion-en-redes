<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migrations
{
    public function up(){
        $this->forge->addField([
            'id_DO' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'id_ord' =>[
                'type' => 'int'
            ],
            'id_prod' =>[
                'type' => 'int'
            ],
            'cantidad' =>[
                'type' => 'int',
                'null' => false
            ],
            'total' =>[
                'type' => 'decimal',
                'constraint' => 10.2,
                'null' => false
            ],
        ]);
        $this->froge->addKey('id_orden', true);
        $this->froge->addForeingKey('id_ord', 'orden', 'id_orden', 'CASCADE', 'SET NULL');
        $this->froge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->froge->createTable('detalleOrden');
    }

    public function down(){
        $this->forge->dropTable('detalleOrden');
    }
}