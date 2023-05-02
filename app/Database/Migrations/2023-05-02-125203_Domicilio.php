<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class usuarios extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_domicilio' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'id_usu' =>[
                'type' =>'INT',
            ],
            'calle' =>[
                'type' => 'varchar',
                'constraint' => 30,
                'null' => false
            ],
            'num_calle' =>[
                'type' => 'int',
                'unsigned'=> true,
                'null' => false
            ],
            'provincia' =>[
                'type' => 'varchar',
                'constraint' => 30,
                'null' => false
            ],
            'piso' =>[
                'type' => 'int',
                'unsigned'=> true
            ],
            'dpto' =>[
                'type' => 'varchar',
                'constraint' => 5
            ],
            'pais' =>[
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'codigoPostal' =>[
                'type' => 'varchar',
                'constraint' => 8,
                'null' => false
            ],
        ]);
        $this->forge->addKey('id_domicilio', true);
        $this->forge->addForeignKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->createTable('domicilios');
    }

    public function down(){
        $this->forge->dropTable('domicilios');
    }

}
