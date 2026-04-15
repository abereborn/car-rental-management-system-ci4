<?php

namespace App\Controllers;

use App\Models\PembayaranModel;
use App\Models\TransaksiModel;
use App\Models\MobilModel;

class Pembayaran extends BaseController
{
    protected $pembayaranModel;
    protected $transaksiModel;
    protected $mobilModel;

    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
        $this->transaksiModel  = new TransaksiModel();
        $this->mobilModel      = new MobilModel();
    }

    public function index($transaksi_id)
    {
        $transaksi = $this->transaksiModel->find($transaksi_id);

        return view('pembayaran/index', [
            'transaksi' => $transaksi
        ]);
    }

    public function store()
    {
        $transaksi_id = $this->request->getPost('transaksi_id');
        $metode       = $this->request->getPost('metode');
        $jumlah       = $this->request->getPost('jumlah_bayar');

        $this->pembayaranModel->save([
            'transaksi_id' => $transaksi_id,
            'metode'       => $metode,
            'jumlah_bayar' => $jumlah,
            'status'       => 'lunas',
            'tanggal_bayar'=> date('Y-m-d H:i:s')
        ]);

        // 🔥 Update transaksi jadi dibayar
        $this->transaksiModel->update($transaksi_id, [
            'status' => 'dibayar'
        ]);

        // 🔥 Update mobil jadi disewa
        $transaksi = $this->transaksiModel->find($transaksi_id);
        $this->mobilModel->update($transaksi['mobil_id'], [
            'status' => 'Disewa'
        ]);

        return redirect()->to('/transaksi')->with('success', 'Pembayaran berhasil!');
    }
}
