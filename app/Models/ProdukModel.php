<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk'; // Nama tabel
    protected $primaryKey = 'idProduk';    // Primary key

    protected $allowedFields = ['idProduk', 'namaProduk', 'jenisProduk', 'hargaProduk', 'tersedia', 'gambarProduk']; // Kolom yang boleh diisi

}