<?php

namespace App\Controllers;

use App\Models\MobilModel;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;

class Mobil extends BaseController
{
    protected $mobilModel;

    public function __construct()
    {
        $this->mobilModel = new MobilModel();
    }

    public function index()
    {
        $mobilModel = new MobilModel();
        $pembayaranModel = new PembayaranModel();
        $transaksiModel = new TransaksiModel();

        // Data mobil
        $data['mobil'] = $mobilModel->findAll();

        // 🔥 Data pembayaran
        $data['pembayaran'] = $pembayaranModel
            ->select('pembayaran.*, 
                    transaksi.user_id, 
                    mobil.nama_mobil')
            ->join('transaksi', 'transaksi.id = pembayaran.transaksi_id')
            ->join('mobil', 'mobil.id = transaksi.mobil_id')
            ->orderBy('pembayaran.tanggal_bayar', 'DESC')
            ->findAll();

        // 🔥🔥 INI YANG BARU — DATA PEMINJAM
        $data['peminjam'] = $transaksiModel
            ->select('transaksi.*, 
                  users.nama_lengkap, 
                  users.no_telepon, 
                  users.alamat, 
                  mobil.nama_mobil')
            ->join('users', 'users.id = transaksi.user_id')
            ->join('mobil', 'mobil.id = transaksi.mobil_id')
            ->orderBy('transaksi.id', 'DESC')
            ->findAll();

        return view('mobil/index', $data);
    }


    public function create()
    {
        return view('mobil/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nama_mobil' => 'required|min_length[3]',
            'merk' => 'required',
            'plat_nomor' => 'required|is_unique[mobil.plat_nomor]',
            'harga_per_hari' => 'required|numeric',
            ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $harga = str_replace('.', '', $this->request->getPost('harga_per_hari'));

        $this->mobilModel->save([
            'nama_mobil' => $this->request->getPost('nama_mobil'),
            'merk' => $this->request->getPost('merk'),
            'plat_nomor' => $this->request->getPost('plat_nomor'),
            'harga_per_hari' => $harga,
            'status' => 'Tersedia' // otomatis
        ]);


        return redirect()->to('/mobil')->with('success', 'Data berhasil ditambahkan!');
    }


    public function delete($id)
    {
        $this->mobilModel->delete($id);
        return redirect()->to('/mobil');
    }

    public function edit($id)
    {
        $data['mobil'] = $this->mobilModel->find($id);
        return view('mobil/edit', $data);
    }

    public function update($id)
    {
        $mobilLama = $this->mobilModel->find($id);

        if ($mobilLama['plat_nomor'] == $this->request->getPost('plat_nomor')) {
            $rule_plat = 'required';
        } else {
            $rule_plat = 'required|is_unique[mobil.plat_nomor]';
        }

        $rules = [
            'nama_mobil' => 'required|min_length[3]',
            'merk' => 'required',
            'plat_nomor' => $rule_plat,
            'harga_per_hari' => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $harga = str_replace('.', '', $this->request->getPost('harga_per_hari'));

        $this->mobilModel->update($id, [
            'nama_mobil' => $this->request->getPost('nama_mobil'),
            'merk' => $this->request->getPost('merk'),
            'plat_nomor' => $this->request->getPost('plat_nomor'),
            'harga_per_hari' => $harga,
            'status' => $this->request->getPost('status') // ambil dari form edit
        ]);

        return redirect()->to('/mobil')->with('success', 'Data berhasil diupdate!');
    }


}
