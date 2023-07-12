<?php

namespace App\Models;

use CodeIgniter\Model;

class JenistugasModel extends Model
{
    protected $table            = 'tb_jenistugas';
    protected $primaryKey       = 'id_jenistugas';
    protected $useAutoIncrement = true;
    protected $allowedFields      = ['nama_jenistugas', 'tugas_terkait', 'katagori'];
 
}
