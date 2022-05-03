<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    //const PASSWORD_DEFAULT = 'pass_ahead';
    protected $table = 'tblusuario';
    protected $primaryKey = 'IdUsuario';
    protected $allowedFields = ['Usuario', 'Correo', 'Contrasena', 'TipoUsuario'];

    function contrasenaHash($contrasenaPlana)
    {
        return password_hash($contrasenaPlana, PASSWORD_DEFAULT);
    }

    function contrasenaVerificar($contrasenaPlana, $contrasenaHash)
    {
        return password_verify($contrasenaPlana, $contrasenaHash);
    }
}