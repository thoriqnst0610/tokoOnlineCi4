<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin'; // Nama tabel
    protected $primaryKey = 'idAdmin';    // Primary key

    protected $allowedFields = ['idAdmin', 'nama', 'username', 'password']; // Kolom yang boleh diisi

}