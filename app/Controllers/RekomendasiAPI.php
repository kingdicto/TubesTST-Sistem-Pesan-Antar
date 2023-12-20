<?php

namespace App\Controllers;

use App\Models\RekomendasiAPImodel;

class RekomendasiAPI extends BaseController
{
    // public function index()
    // {
    //     $menuModel = new RekomendasiAPImodel();
    //     $data['dbrestoran'] = $menuModel->getMenuData();

    //     // return view('/layout/header', $data).view('').view('/layout/footer');
    //     // return view('layout/header', $data).view('pages/restoran').view('layout/footer');
       
    //     return $this->response->setStatusCode(200)->setJSON($data);



    // }

       public function index()
    {
        $menuModel = new RekomendasiAPImodel();
        $data['dbrestoran'] = $menuModel->getMenuData();

        // return view('layout/header', $data).view('pages/home', $data).view('layout/footer');
        $header = view('layout/header', $data);
        $home = view('pages/home', $data);
        $footer = view('layout/footer');

        return $header . $home . $footer;
    }
}



