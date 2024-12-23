<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriProdukModel extends Model
{
    protected $table      = 'kategoriproduk'; // Nama tabel
    protected $primaryKey = 'idKategori';    // Primary key

    protected $allowedFields = ['idKategori', 'namaKategori', 'jenisKategori', 'deskripsiKategori']; // Kolom yang boleh diisi

}