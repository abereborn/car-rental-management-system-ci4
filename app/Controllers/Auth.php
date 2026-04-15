<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        $userModel = new UserModel();

        $userModel->save([
            'username'      => $this->request->getPost('username'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'alamat'        => $this->request->getPost('alamat'),
            'no_telepon'    => $this->request->getPost('no_telepon'),
            'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'          => 'customer'
        ]);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $userModel = new UserModel();

        $user = $userModel
            ->where('username', $this->request->getPost('username'))
            ->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {

            session()->set([
                'user_id'      => $user['id'],
                'username'     => $user['username'],
                'nama_lengkap' => $user['nama_lengkap'],
                'role'         => $user['role'],
                'logged_in'    => true
            ]);


            return redirect()->to('/mobil');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function createAdmin()
    {
        return view('admin/create');
    }

    public function storeAdmin()
    {
        $userModel = new UserModel();

        $userModel->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'role' => 'admin'
        ]);

        return redirect()->to('/mobil')
            ->with('success', 'Admin baru berhasil dibuat!');
    }

}
