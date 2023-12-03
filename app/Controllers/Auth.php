<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        //
        $data = [
            'titel' => 'Login',
        ];
        return view('auth/login', $data);
    }

    public function login()
    {
        // Proses Login
    }

    public function regist()
    {
        $data = [
            'titel' => 'Registrasi',
        ];
        return view('auth/regist', $data);
    }

    public function daftar()
    {
        // Proses Daftar
    }

    public function logout()
    {
        // Proses Keluar
    }
}
