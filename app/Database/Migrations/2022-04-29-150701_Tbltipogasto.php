<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbltipogasto extends Migration
{
    public function up()
    {
        $fields = [
            'IdTipoGasto'        => [
                'type'           => 'SMALLINT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'TipoGasto'         => [
                'type'          => 'CHAR',
                'constraint'    => 100,
                'default'       => '',
            ],
            'TipoObjeto'        => [
                'type'          => 'CHAR',
                'constraint'    => 10,
                'null'          => true,
                'default'       => null,
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('IdTipoGasto', true);
        $this->forge->createTable('tbltipogasto', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbltipogasto');
    }
}
