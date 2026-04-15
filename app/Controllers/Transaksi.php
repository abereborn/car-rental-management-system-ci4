<?php

namespace App\Controllers;

use App\Models\MobilModel;

class Transaksi extends BaseController
{
    public function index()
    {
        $transaksiModel = new \App\Models\TransaksiModel();
        $mobilModel = new \App\Models\MobilModel();

        $data['mobil'] = $mobilModel->where('status', 'Tersedia')->findAll();

        $data['transaksi'] = $transaksiModel
            ->select('transaksi.*, mobil.nama_mobil')
            ->join('mobil', 'mobil.id = transaksi.mobil_id')
            ->findAll();

        return view('transaksi/index', $data);
    }

    public function store()
    {
        $transaksiModel = new \App\Models\TransaksiModel();
        $mobilModel = new \App\Models\MobilModel();

        $mobilId = $this->request->getPost('mobil_id');

        if (!$mobilId) {
            return redirect()->back()->with('error', 'Mobil belum dipilih');
        }

        $mobil = $mobilModel->find($mobilId);

        if (!$mobil) {
            return redirect()->back()->with('error', 'Mobil tidak ditemukan');
        }

        $tanggalSewa = new \DateTime($this->request->getPost('tanggal_sewa'));
        $tanggalKembali = new \DateTime($this->request->getPost('tanggal_kembali'));

        if ($tanggalKembali < $tanggalSewa) {
            return redirect()->back()->with('error', 'Tanggal kembali tidak valid');
        }

        $lamaSewa = $tanggalSewa->diff($tanggalKembali)->days;
        if ($lamaSewa == 0) {
            $lamaSewa = 1;
        }

        $totalHarga = $lamaSewa * $mobil['harga_per_hari'];

        $transaksiModel->save([
            'user_id' => session()->get('user_id'),
            'mobil_id' => $mobilId,
            'tanggal_sewa' => $this->request->getPost('tanggal_sewa'),
            'tanggal_kembali' => $this->request->getPost('tanggal_kembali'),
            'total_harga' => $totalHarga,
            'status' => 'Disewa'
        ]);

        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil ditambahkan');
    }
}
