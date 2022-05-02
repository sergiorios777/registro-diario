<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tblusuario extends Migration
{
    public function up()
    {
        $fields = [
            'IdUsuario'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Usuario'         => [
                'type'          => 'CHAR',
                'constraint'    => 20,
                'unique'       => true,
            ],
            'Correo'        => [
                'type'          => 'CHAR',
                'constraint'    => 100,
                'unique'       => true,
            ],
            'Contrasena'        => [
                'type'          => 'CHAR',
                'constraint'    => 255,
            ],
            'TipoUsuario'        => [
                'type'          => 'ENUM',
                'constraint'    => ['admin', 'cliente', 'invitado'],
                'default'       => 'invitado',
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('IdUsuario', true);
        $this->forge->createTable('tblusuario', true);
    }

    public function down()
    {
        $this->forge->dropTable('tblusuario');
    }
}
