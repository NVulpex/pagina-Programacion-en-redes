<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migratinos;

class usuarios extends Migrations
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
        $this->froge->addKey('id_domicilio', true);
        $this->froge->addForeingKey('id_usu', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->froge->createTable('domicilios');
    }

    public function down(){
        $this->forge->dropTable('domicilios');
    }

}