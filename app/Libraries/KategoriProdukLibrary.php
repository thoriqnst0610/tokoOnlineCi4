<?php

namespace App\Libraries;

use App\Models\KategoriProdukModel;
use Exception;

class KategoriProdukLibrary
{
    public function menyimpanKategori(string $namaKategori, string $jenisKategori, string $deskripsiKategori): bool
    {
        if (empty($namaKategori) || empty($jenisKategori) || empty($deskripsiKategori)) {
            return false;
        }

            $kategoriModel = new KategoriProdukModel();
            $tanggal = date('YmdHis');
            $randomNumber = rand(1000, 9999);
            $idKategori = 'kategori' . $tanggal . $randomNumber;

            $data = [
                'idKategori' => $idKategori,
                'namaKategori' => $namaKategori,
                'jenisKategori' => $jenisKategori,
                'deskripsiKategori' => $deskripsiKategori
            ];

            $kategoriModel->insert($data);
            return true;

    }

    public function ambilKategoriId(string $idKategori): bool|array
    {


            if (empty($idKategori)) {

                return false;

            } else {

                $kategoriModel = new KategoriProdukModel();
                return $kategoriModel->where('idKategori', $idKategori)->first();

            }
        
    }

    public function editKategoriProduk(string $idKategori, string $namaKategori, string $jenisKategori, string $deskripsiKategori): bool
    {

        if (empty($idKategori) || empty($namaKategori) || empty($jenisKategori) || empty($deskripsiKategori)) {

            return false;
        }

        $kategoriModel = new KategoriProdukModel();


            $data = [
                'idKategori' => $idKategori,
                'namaKategori' => $namaKategori,
                'jenisKategori' => $jenisKategori,
                'deskripsiKategori' => $deskripsiKategori
            ];

            if ($kategoriModel->update($idKategori, $data)) {

                return true;

            } else {
              
                return false;
            }
    }

    public function hapusKategoriProdukId(string $idKategori): bool|array
    {

        $kategoriModel = new KategoriProdukModel();


            if (empty($idKategori)) {

                return false;

            } else {

                $kategoriModel->delete($idKategori);
                return true;
                
            }

    }
}
