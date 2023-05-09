<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class detalleOrden extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_DO' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'id_ord' =>[
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
            'total' =>[
                'type' => 'decimal',
                'constraint' => 10.2,
                'null' => false
            ],
        ]);
        $this->forge->addKey('id_DO', true);
        $this->forge->addForeignKey('id_ord', 'orden', 'id_orden', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('id_prod', 'productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->forge->createTable('detalleOrden');
    }

    public function down(){
        $this->forge->dropTable('detalleOrden');
    }
}
