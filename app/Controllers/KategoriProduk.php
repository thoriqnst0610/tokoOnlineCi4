<?php

namespace App\Controllers;

use App\Libraries\KategoriProdukLibrary;
use App\Libraries\ProdukLibrary;
use App\Models\KategoriProdukModel;

class kategoriProduk extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

    public function kategoriProduk():string
    {

        $kategoriModel = new KategoriProdukModel();
        $data = $kategoriModel->findAll();

        return view('header', ['data' => $data]).view('kategoriProduk').view('footer');
    }

    public function produk():string
    {
        return view('header').view('produk').view('footer');
    }

    public function tambahKategori()
    {

        $namaKategori = $this->request->getPost('namaKategori');
        $jenisKategori =  $this->request->getPost('jenisKategori');
        $deskripsiKategori = $this->request->getPost('deskripsiKategori');
        $kategoriService = new KategoriProdukLibrary();
        $simpanKategori = $kategoriService->menyimpanKategori($namaKategori, $jenisKategori, $deskripsiKategori);

        if($simpanKategori){

            return redirect()->to('/kategoriProduk')->with('success', 'berhasil menambah data');

        }else{

            return redirect()->back()->with('error', 'Gagal menambah data');

        }
    }

    public function ambilKategoriProdukId(string $idKategori)
    {

        $kategoriService = new KategoriProdukLibrary();
        $ambilData = $kategoriService->ambilKategoriId($idKategori);

        if($ambilData){

            return $this->response->setJSON($ambilData);

        }else{

            return $this->response->setStatusCode(404)->setJSON(['error' => 'kategori tidak ditemukan']);

        }

    }

    public function editKategoriProduk()
    {

        $kategoriService = new KategoriProdukLibrary();
        $idKategori = $this->request->getPost('idKategoriEdit');
        $namaKategori = $this->request->getPost('namaKategoriEdit');
        $jenisKategori = $this->request->getPost('jenisKategoriEdit');
        $deskripsiKategori = $this->request->getPost('deskripsiKategoriEdit');
        $updateData = $kategoriService->editKategoriProduk($idKategori, $namaKategori, $jenisKategori, $deskripsiKategori);

        if($updateData){

            return redirect()->to('/kategoriProduk')->with('success', 'berhasil mengedit data');

        }else{

            return redirect()->back()->with('error', 'Gagal mengedit data');

        }
    }

    public function hapusKategoriProdukId()
    {

        $idKategori = $this->request->getPost('idKategoriHapus');
        $kategoriService = new KategoriProdukLibrary();
        $hapusData = $kategoriService->hapusKategoriProdukId($idKategori);

        if($hapusData){

            return redirect()->to('/kategoriProduk')->with('success', 'berhasil menghapus Data');

        }else{

            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
    }
}
