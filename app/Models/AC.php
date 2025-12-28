<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AC extends Model
{
    protected $table = 'ac';

    protected $fillable = [
        'nama_barang',
        'satuan',
        'harga_satuan',
        'jumlah_harga',
        'lokasi'
    ];

    public $timestamps = false;
}
