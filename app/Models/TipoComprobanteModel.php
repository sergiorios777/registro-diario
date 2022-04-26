<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoComprobanteModel extends Model
{
    protected $table = 'tbltipocomprobante';
    protected $primaryKey = 'IdTipoComprobante';
    protected $allowedFields = ['TipoComprobante', 'CodigoComprobante'];
}