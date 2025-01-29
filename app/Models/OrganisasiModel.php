<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganisasiModel extends Model
{
    protected $table = 'organisasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nim', 'jurusan', 'umur'];
}