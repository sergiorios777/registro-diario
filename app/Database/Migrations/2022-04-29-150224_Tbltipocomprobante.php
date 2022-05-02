<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbltipocomprobante extends Migration
{
    public function up()
    {
        $fields = [
            'IdTipoComprobante'  => [
                'type'           => 'SMALLINT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'TipoComprobante'    => [
                'type'           => 'CHAR',
                'constraint'     => 50,
                'default'        => '',
            ],
            'CodigoComprobante'  => [
                'type'           => 'SMALLINT',
                'constraint'     => 6,
                'unsigned'       => true,
                'null'           => true,
                'default'        => null,
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('IdTipoComprobante', true);
        $this->forge->createTable('tbltipocomprobante', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbltipocomprobante');
    }
}
