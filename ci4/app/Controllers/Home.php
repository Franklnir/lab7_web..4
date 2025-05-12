<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('artikel/home', [
            'title' => 'Beranda',
            'content' => 'Selamat datang di website artikel.'
        ]);
    }
}
