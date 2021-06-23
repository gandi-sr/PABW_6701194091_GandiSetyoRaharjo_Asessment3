<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Crud'
        ];
        return view('pages/home', $data);
    }

    public function jadwal_sholat()
    {
        $data = [
            'title' => 'Admin'
        ];
        return view('jadwal_sholat/index', $data);
    }
}
