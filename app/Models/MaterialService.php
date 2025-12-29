<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialService extends Model
{
    protected $table = 'material_services';

    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'nama_toko',
        'nama_pic',
        'pic_telepon',
        'jadwal_visit'
    ];

    public $casts = [
        'jadwal_visit'  => 'date'
    ];

    public $timestamps = null;
}
