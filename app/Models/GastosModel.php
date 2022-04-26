<?php

namespace App\Models;

use CodeIgniter\Model;

class GastosModel extends Model
{
    protected $table = 'tblgasto';
    protected $primaryKey = 'IdGasto';
    protected $allowedFields = ['IdTipoComprobante', 'NumeroComprobante', 'Fecha', 'Notas', 'AplicaIGV', 'Monto', 'IGV', 'MontoTotal'];

}