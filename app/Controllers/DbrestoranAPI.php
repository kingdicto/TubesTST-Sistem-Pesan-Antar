<?php

namespace App\Controllers;

use App\Models\DbrestoranAPImodel;

class DbrestoranAPI extends BaseController
{
    public function index()
    {
        $menuModel = new DbrestoranAPImodel();
        $data['dbrestoran'] = $menuModel->getMenuData();

        // return view('/layout/header', $data).view('').view('/layout/footer');
        // return view('layout/header', $data).view('pages/restoran').view('layout/footer');
       
        return $this->response->setStatusCode(200)->setJSON($data);



    }
}

