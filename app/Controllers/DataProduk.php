<?php

namespace App\Controllers;

use App\Libraries\ProdukLibrary;
use App\Models\ProdukModel;
use CodeIgniter\Files\File;

class DataProduk extends BaseController
{

    public function tampilProduk(): string
    {

        $produkModel = new ProdukModel();
        $data = $produkModel->findAll();

        return view('header', ['data' => $data]) . view('produk') . view('footer');
    }

    public function tambahProduk()
    {

        $produkService = new ProdukLibrary();
        $namaProduk = $this->request->getPost('namaProduk');
        $jenisProduk = $this->request->getPost('jenisProduk');
        $hargaProduk = $this->request->getPost('hargaProduk');
        $tersedia = $this->request->getPost('tersedia');

        $validation = \config\Services::validation();
        $gambarProduk = $this->request->getFile('gambarProduk');
        $namaFile = $gambarProduk->getRandomName();
        $tempatFile = ROOTPATH . 'public/uploads';

        if ($gambarProduk->move($tempatFile, $namaFile)) {

            $simpanData = $produkService->tambahProduk($namaProduk, $jenisProduk, $hargaProduk, $tersedia, $namaFile);

            if ($simpanData) {

                return redirect()->to('/produks')->with('success', 'berhasil menambah data');
            } else {

                return redirect()->back()->with('error', 'gagal menambah data.');
            }
        } else {

            return redirect()->back()->with('error', 'gagal menambah data.');
        }
    }

    public function ambilProdukId(string $idProduk)
    {

        $produkService = new ProdukLibrary();
        $ambilData = $produkService->ambilProdukId($idProduk);

        if ($ambilData) {

            return $this->response->setJSON($ambilData);
        } else {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Produk tidak ditemukan']);
        }
    }

    public function ambilProdukIdLagi(string $idProduk)
    {

        $produkService = new ProdukLibrary();
        $ambilData = $produkService->ambilProdukId($idProduk);

        if ($ambilData) {

            return $this->response->setJSON($ambilData);
        } else {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Produk tidak ditemukan']);
        }
    }

    public function updateProduk()
    {

        $produkService = new ProdukLibrary();

        $idProduk = $this->request->getPost('idProdukEdit');
        $namaProduk = $this->request->getPost('namaProdukEdit');
        $jenisProduk = $this->request->getPost('jenisProdukEdit');
        $hargaProduk = $this->request->getPost('hargaProdukEdit');
        $tersedia = $this->request->getPost('tersediaEdit');

        $validation = \config\Services::validation();
        $gambarProduk = $this->request->getFile('gambarProdukEdit');

        if ($gambarProduk->isValid()) {

            $namaFile = $gambarProduk->getRandomName();
            $tempatFile = ROOTPATH . 'public/uploads';

            if ($gambarProduk->move($tempatFile, $namaFile)) {

                $simpanData = $produkService->updateProduk($idProduk, $namaProduk, $jenisProduk, $hargaProduk, $tersedia, $namaFile);
    
                if ($simpanData) {
    
                    return redirect()->to('/produks')->with('success', 'berhasil mengedit data');

                } else {
    
                    return redirect()->back()->with('error', 'gagal mengedit data.');
                }
            } else {
    
                return redirect()->back()->with('error', 'gagal upload gambar.');
            }


        } else {

            $simpanData = $produkService->updateProduk($idProduk, $namaProduk, $jenisProduk, $hargaProduk, $tersedia);

            if ($simpanData) {
    
                return redirect()->to('/produks')->with('success', 'berhasil mengedit data');

            } else {

                return redirect()->back()->with('error', 'gagal mengedit data.');
            }

        }
    }

    public function hapusProduk()
    {

        $produkService = new ProdukLibrary();
        $idProduk = $this->request->getPost('idProdukHapus');

        $hapusData = $produkService->hapusProduk($idProduk);

        if($hapusData){

            return redirect()->to('/produks')->with('success', 'berhasil menghapus data');

        }else{

            return redirect()->back()->with('error', 'gagal menghapus data');
        }
    }
}
