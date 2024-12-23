<?php

namespace App\Libraries;

use App\Models\ProdukModel;

class ProdukLibrary{

    public function tambahProduk(string $namaProduk, string $jenisProduk, int $hargaProduk, string $tersedia, string $gambarProduk)
    {

        $produkModel= new ProdukModel();

        if(empty($namaProduk) || empty($hargaProduk)|| empty($jenisProduk) || empty($tersedia)){

            return false;

        }else{

            $produkModel = new ProdukModel();
            $tanggal = date('YmdHis');
            $randomNumber = rand(1000, 9999);
            $idProduk = 'produk' . $tanggal . $randomNumber;

            $data = [
                'idProduk' => $idProduk,
                'namaProduk' => $namaProduk,
                'jenisProduk' => $jenisProduk,
                'hargaProduk' => $hargaProduk,
                'tersedia' => $tersedia,
                'gambarProduk' => $gambarProduk
            ];
            $produkModel->insert($data);
            return true;

        }

    }

    public function ambilProdukId(string $idProduk):bool|array
    {

        $produkModel = new ProdukModel();

        if(empty($idProduk)){

            return false;

        }else{

            return $produkModel->where('idProduk', $idProduk)->first();

        }
    }

    public function updateProduk(string $idProduk, string $namaProduk, string $jenisProduk, string $hargaProduk, string $tersedia, string $gambarProduk = null)
    {

        $produkModel = new ProdukModel();

        if(empty($idProduk) || empty($idProduk) || empty($namaProduk) || empty($jenisProduk) || empty($hargaProduk) || empty($tersedia)){

            return false;

        }else{

            if($gambarProduk == null){

                $data = [
                    'namaProduk' => $namaProduk,
                    'jenisProduk' => $jenisProduk,
                    'hargaProduk' => $hargaProduk,
                    'tersedia' => $tersedia
                ];

                $produkModel->update($idProduk, $data);
                return true;


            }else{

                $data = [
                    'namaProduk' => $namaProduk,
                    'jenisProduk' => $jenisProduk,
                    'hargaProduk' => $hargaProduk,
                    'tersedia' => $tersedia,
                    'gambarProduk' => $gambarProduk
                ];

                $produkModel->update($idProduk, $data);
                return true;

            }
        }
    }

    public function hapusProduk(string $idProduk)
    {

        $produkModel = new ProdukModel();

        if(empty($idProduk)){

            return false;

        }else{

            $produkModel->delete($idProduk);
            return true;

        }
    }

    public function ambilProdukKategori(string $kategori):bool|array
    {

        $produkModel = new ProdukModel();

        if(empty($kategori)){

            return false;

        }else{

            return $produkModel->where('jenisProduk', $kategori)->findAll();

        }
    }
}