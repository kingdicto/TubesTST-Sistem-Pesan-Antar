<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function index(){
        $data = ['title' =>'Home | TST Delivery'];
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

}
