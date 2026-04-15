<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'transaksi_id',
        'metode',
        'jumlah_bayar',
        'status',
        'bukti_transfer',
        'tanggal_bayar'
    ];

    protected $useTimestamps = true;
}
