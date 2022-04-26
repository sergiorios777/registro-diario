<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoGastoModel extends Model
{
    protected $table = 'tbltipogasto';
    protected $primaryKey = 'IdTipoGasto';
    protected $allowedFields = ['TipoGasto', 'TipoObjeto'];
}