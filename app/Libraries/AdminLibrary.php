<?php

namespace App\Libraries;

use App\Models\AdminModel;
use App\Libraries\SessionLibrary;

class AdminLibrary
{

    public function tambahAdmin(string $nama, string $username, string $password): bool
    {
        $adminModel = new AdminModel();

        if (empty($nama) || empty($username) || empty($password)) {

            return false;
        } else {

            $tanggal = date('YmdHis');
            $randomNumber = rand(1000, 9999);
            $idAdmin = 'Admin' . $tanggal . $randomNumber;

            $password = password_hash($password, PASSWORD_DEFAULT);

            $data = [
                'idAdmin' => $idAdmin,
                'nama' => $nama,
                'username' => $username,
                'password' => $password
            ];

            $adminModel->insert($data);
            return true;
        }
    }

    public function loginAdmin(string $username, string $password): bool
    {

        $adminModel = new AdminModel();

        if (empty($username) || empty($password)) {

            return false;
        } else {

            $cekUsername = $adminModel->where('username', $username)->first();

            if ($cekUsername == null) {

                return false;
            } else {

                $cekPassword = password_verify($password, $cekUsername['password']);
            }

            if ($cekUsername != null && $cekPassword == true) {

                $sessionLibrary = new SessionLibrary();

                if ($dataSession = $sessionLibrary->cekSessionLogin($username)) {

                    $buatCookie = $sessionLibrary->buatCookie($cekUsername['username'], $dataSession);
                    
                } else {

                    $kodeSession = $sessionLibrary->buatSession($cekUsername['username']);
                    $buatCookie = $sessionLibrary->buatCookie($cekUsername['username'], $kodeSession);
                }


                if ($buatCookie) {

                    return true;
                } else {

                    return false;
                }
            } else {

                return false;
            }
        }
    }

    public function logoutAdmin()
    {

        $sessionLibrary = new SessionLibrary();
        $ambilCookie = $sessionLibrary->cekCookie();
        $sessionLibrary->hapusCookie('username', 'kode');
        $sessionLibrary->hapusSession($ambilCookie['usernameSession']);
    }
}
