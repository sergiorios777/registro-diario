<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ingresos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IdIngreso' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'NumeroCompobante' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ],
            'Fecha' => [
                'type' => 'DATE',
                'null' => FALSE,
            ],
            'Notas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ],
            'Monto' => [
                'type' => 'DOUBLE',
                'null' => FALSE,
            ]
        ]);

        $this->forge->addKey('IdIngreso', TRUE);

        $attributes = [
            'ENGINE' => 'InnoDB',
            'CHARACTER SET' => 'utf8mb4',
            'COLLATE' => 'utf8mb4_general_ci',
        ];

        $this->forge->createTable('ingresos', false, $attributes);        
    }

    public function down()
    {
        $this->forge->dropTable('ingresos');
    }
}
