<?php

namespace App\Filters;

use App\Libraries\SessionLibrary;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginMiddleware implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {

        $sessionLibrary = new SessionLibrary();
        $cekCookie = $sessionLibrary->cekCookie();

        if(!empty($cekCookie)){

            $usernameSession = $cekCookie['usernameSession'];
            $kodeSession = $cekCookie['kodeSession'];
            $cekSession = $sessionLibrary->cekSession($usernameSession, $kodeSession);

            if($cekSession){

                return redirect()->to('/kategoriProduk')->with('success', 'Anda Sudah Login');

            }

        }else{

        }
        
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }

}