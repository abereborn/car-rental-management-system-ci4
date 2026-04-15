<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class PembayaranAdmin extends BaseController
{
    protected $pembayaranModel;

    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        $data['pembayaran'] = $this->pembayaranModel
            ->select('pembayaran.*, mobil.nama_mobil')
            ->join('transaksi', 'transaksi.id = pembayaran.transaksi_id')
            ->join('mobil', 'mobil.id = transaksi.mobil_id')
            ->findAll();

        return view('pembayaran-admin/index', $data);
    }
}
