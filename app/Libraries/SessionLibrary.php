<?php

namespace App\Libraries;

use CodeIgniter\Cookie\Cookie;
use DateTime;
use App\Models\SessionModel;

class SessionLibrary
{

    public function buatSession(string $username)
    {

        $tanggal = date('YmdHis');
        $randomNumber = rand(1000, 9999);
        $idSession = 'Session' . $tanggal . $randomNumber;
        $kodeSession = 'kodeSession' . $tanggal . $randomNumber . $username;
        $kodeSession = password_hash($kodeSession, PASSWORD_DEFAULT);

        $sessionModel = new SessionModel();

        if (empty($username)) {

            return false;
        } else {

            $data = [
                'idSession' => $idSession,
                'usernameSession' => $username,
                'kodeSession' => $kodeSession
            ];

            $sessionModel->insert($data);
            return $kodeSession;
        }
    }

    public function hapusSession(string $username)
    {

        $sessionModel = new SessionModel();
        $cekUsername = $sessionModel->where('usernameSession', $username)->first();

        if (empty($username)) {

            return false;

        } else {

            $sessionModel->delete($cekUsername['idSession']);
            return true;

        }
    }
    public function cekSession(string $username, string $kodeSession)
    {
        // Memuat model Session
        $sessionModel = new SessionModel();
    
        // Memastikan username dan kodeSession tidak kosong
        if (empty($kodeSession) || empty($username)) {
            return false;
        }
    
        // Mencari data session berdasarkan username
        $cekUsername = $sessionModel->where('usernameSession', $username)->first();
    
        // Memeriksa apakah data username ditemukan di database
        if ($cekUsername !== null) {
    
            // Jika kodeSession valid, return true
            if ($kodeSession == $cekUsername['kodeSession']) {

                return true;
                
            }
        }
    
        // Jika tidak valid atau tidak ditemukan
        return false;
    }

    public function cekSessionLogin(string $username)
    {
        // Memuat model Session
        $sessionModel = new SessionModel();
    
        // Memastikan username dan kodeSession tidak kosong
        if (empty($username)) {
            return false;
        }
    
        // Mencari data session berdasarkan username
        $cekUsername = $sessionModel->where('usernameSession', $username)->first();
    
        // Memeriksa apakah data username ditemukan di database
        if ($cekUsername !== null) {
    
            return $cekUsername['kodeSession'];
        }
    
        // Jika tidak valid atau tidak ditemukan
        return false;
    }
    

    public function buatCookie(string $username, string $kodeSession)
    {

        // Memastikan parameter username dan kodeSession tidak kosong
        if (empty($username) || empty($kodeSession)) {
            return false;
        } else {

            setcookie("username", $username, time() + 86400, "/"); // 86400 detik = 1 hari
            setcookie("kode", $kodeSession, time() + 86400, "/"); // 86400 detik = 1 hari

            return true;
        }
    }


    public function hapusCookie()
    {

        // $response = \Config\Services::response();
        // $response->deleteCookie('username');
        // $response->deleteCookie('kode');

        setcookie("username", "", time() - 86400, "/");
        setcookie("kode", "", time() - 86400, "/");
    }

    public function cekCookie()
    {

        // $response = \Config\Services::response();
        // $ambilUsername = $response->getCookie('username');
        // $ambilKodeSession = $response->getCookie('kode');

        // if ($ambilKodeSession && $ambilUsername) {

        //     return [
        //         'usernameSession' => $ambilUsername,
        //         'kodeSession' => $ambilKodeSession
        //     ];
        // } else {

        //     return [];
        // }

        // Mengakses nilai cookie 'user'
        if (isset($_COOKIE["username"]) && isset($_COOKIE['kode'])) {

            return [
                'usernameSession' => $_COOKIE['username'],
                'kodeSession' => $_COOKIE['kode']
            ];

        } else {

            return [];

        }
    }
}
