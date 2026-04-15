<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id';

    protected $allowedFields = [
        'user_id',
        'mobil_id',
        'tanggal_sewa',
        'tanggal_kembali',
        'total_harga',
        'status'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
