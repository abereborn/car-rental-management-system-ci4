<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Peminjaman extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        $data['peminjam'] = $this->transaksiModel
            ->select('
            transaksi.*, 
            mobil.nama_mobil, 
            users.nama_lengkap,
            users.no_telepon,
            users.alamat
        ')
            ->join('mobil', 'mobil.id = transaksi.mobil_id')
            ->join('users', 'users.id = transaksi.user_id')
            ->findAll();

        return view('peminjaman/index', $data);
    }
}
