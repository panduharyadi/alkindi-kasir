<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    protected $table = 'produk_models';

    public $timestamps = false;

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'satuan',
        'tgl_masuk',
        'stok_dus',
        'stok_strip',
        'total_isi',
        'total_stok',
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
