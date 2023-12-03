<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UsersModel;

class UsersController extends BaseController
{
    public function index()
    {
        //
        $users = new UsersModel();
        $data = [
            'users' => $users->findAll(),
            'titel' => 'Database Users',
        ];
        return view('users/users', $data); # Database Users
    }

    public function add()
    {
        // Form Tambaj Users
    }

    public function save()
    {
        // Proses Save Users
    }

    public function edit($id = null)
    {
        // Form Edit Users
    }

    public function update($id = null)
    {
        // Proses Update Users
    }

    public function profil($id = null)
    {
        // Form Profil Users
    }

    public function profil_update()
    {
        // Proses Update profil
    }

    public function delete()
    {
        // Proses Hapus Users
    }
}
