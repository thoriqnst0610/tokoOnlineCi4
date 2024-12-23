<?php

namespace App\Filters;

use App\Libraries\SessionLibrary;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LogoutMiddleware implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {

        $sessionLibrary = new SessionLibrary();
        $cekCookie = $sessionLibrary->cekCookie();

        if(empty($cekCookie)){

                return redirect()->to('/login')->with('error', 'Anda Harus Login Dulu');

        }
        
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }

}