<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class usuarios extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_usuario' =>[
                'type' =>'INT',
                'auto_increment' => true,
                'null' => false
            ],
            'nom_usuario' =>[
                'type' => 'varchar',
                'constraint' => 45,
                'null' => false
            ],
            'ape_usuario' =>[
                'type' => 'varchar',
                'constraint' => 45,
                'null' => false
            ],
            'nomu_usuario' =>[
                'type' => 'varchar',
                'constraint' => 45,
                'null' => false
            ],
            'email_usuario' =>[
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'pass_usuario' =>[
                'type' => 'varchar',
                'constraint' => 30,
                'null' => false
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('usuarios');
    }

    public function down(){
        $this->forge->dropTable('usuarios');
    }

}
