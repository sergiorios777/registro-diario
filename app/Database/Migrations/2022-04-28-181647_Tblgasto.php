<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tblgasto extends Migration
{
    public function up()
    {
        $fields = [
            'IdGasto'          => [
                'type'           => 'BIGINT',
                'constraint'    => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'IdProveedor'       => [
                'type'          => 'INT',
                'constraint'    => 11,
                'null'          => true,
                'default'       => null,
            ],
            'IdTipoComprobante'       => [
                'type'          => 'SMALLINT',
                'constraint'    => 5,
                'unsigned'      => true,
                'null'          => true,
                'default'       => null,
            ],
            'NumeroComprobante'      => [
                'type'           =>'CHAR',
                'constraint'     => 25,
            ],
            'Fecha' => [
                'type'           => 'DATE',
            ],
            'IdTipoGasto'       => [
                'type'          => 'SMALLINT',
                'constraint'    => 5,
                'unsigned'      => true,
                'null'          => true,
                'default'       => null,
            ],
            'Notas'      => [
                'type'           => 'CHAR',
                'constraint'     => 255,
                'null'           => true,
                'default'        => null,
            ],
            'AplicaIGV'      => [
                'type'           => 'TINYINT',
                'constraint'    => 1,
                'default'        => 0,
            ],
            'Monto'      => [
                'type'           => 'DECIMAL',
                'constraint'    => '10,6',
                'default'        => 0.000000,
            ],
            'IGV'      => [
                'type'           => 'DECIMAL',
                'constraint'    => '10,6',
                'default'        => 0.000000,
            ],
            'MontoTotal'      => [
                'type'           => 'DECIMAL',
                'constraint'    => '10,6',
                'default'        => 0.000000,
            ],
            'Modificado'      => [
                'type'           => 'DATETIME',
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('IdGasto', true);
        $this->forge->createTable('tblgasto', true);
    }

    public function down()
    {
        $this->forge->dropTable('tblgasto');
    }
}
