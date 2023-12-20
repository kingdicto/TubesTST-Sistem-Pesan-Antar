<?php

namespace App\Controllers;

class Menu extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function index(){
        $data = [
            'title' => 'Daftar Menu'
        ];
        return view ('menu/index', $data);   
    }

}
