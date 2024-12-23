<?php

namespace App\Controllers;

use App\Libraries\AdminLibrary;
use App\Libraries\ProdukLibrary;
use App\Models\KategoriProdukModel;
use App\Models\ProdukModel;

class Home extends BaseController
{
    public function index(): string
    {

        $produkModel = new ProdukModel();
        $data = $produkModel->findAll();

        $kategoriModel = new KategoriProdukModel();
        $dataKatgeori = $kategoriModel->findAll();

        return view('/home/header', ['dataProduk' => $data, 'dataKategori' => $dataKatgeori]). view('/home/konten'). view('/home/footer');

    }

    public function daftarProduk()
    {

        $produkModel = new ProdukModel();
        $data = $produkModel->findAll();

        return view('/home/header', ['dataProduk' => $data]). view('/home/daftarproduk'). view('/home/footer');

    }

    public function homeKategori()
    {

        $kategori = $this->request->getGet('kategori');
        $produkLibrary = new ProdukLibrary();
        $ambilData = $produkLibrary->ambilProdukKategori($kategori);

        if($ambilData == false){

            return view('/home/header', ['dataProduk' => []]). view('/home/homekategori'). view('/home/footer');

        }else{

            return view('/home/header', ['dataProduk' => $ambilData]). view('/home/homekategori'). view('/home/footer');

        }
    }

    public function login():string
    {
        return view('/home/login');
    }

    public function loginPost()
    {

        $adminSerivce = new AdminLibrary();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $validasiLogin = $adminSerivce->loginAdmin($username, $password);
       

        if($validasiLogin){

            return redirect()->to('/kategoriProduk')->with('success', 'berhasil Login');

        }else{

            return redirect()->back()->with('error', 'Username Atau Password Salah');

        }

    }

    public function register():string
    {
        return view('/home/register');
    }

    public function registerPost()
    {

        $adminSerivce = new AdminLibrary();

        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $simpanData = $adminSerivce->tambahAdmin($nama, $username, $password);

        if($simpanData){

            return redirect()->to('/login')->with('success', 'berhasil register');

        }else{

            return redirect()->back()->with('error', 'gagal register');

        }

    }

    public function logout()
    {

        $adminSerivce = new AdminLibrary();
        $adminSerivce->logoutAdmin();
        return redirect()->to('/login')->with('success', 'berhasil Logout');

    }
}
