<?php

namespace App\Models;

use CodeIgniter\Model;

class IngresosModel extends Model
{
    protected $table         = 'tblingreso';
    protected $primaryKey    = 'IdIngreso';
    protected $allowedFields = ['IdTipoComprobante', 'NumeroComprobante', 'Fecha', 'Notas', 'AplicaIGV', 'Monto', 'IGV', 'MontoTotal'];

}