<?php

namespace App\Controllers;

class Mainan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Mainan'
        ];
        return view('mainan/index', $data);
    }
}
