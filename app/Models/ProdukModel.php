<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'kode_barang',
        'satuan',
        'tgl_masuk',
        'nama_barang',
        'stok_dus',
        'stok_strip',
        'total_stok',
        'total_isi',
        'tgl_kadaluarsa',
        'keterangan',
        'info',
        'harga',
    ];

    protected $dates = [
        'tgl_masuk',
        'tgl_kadaluarsa',
    ];

    use HasFactory;
}
