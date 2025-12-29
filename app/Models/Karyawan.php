<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    
    protected $fillable = [
        'nama_karyawan',
        'tugas_karyawan',
        'absen',
        'jadwal_karyawan'
    ];

    public $casts = [
        'jadwal_karyawan'   =>  'datetime'
    ];
    
    public $timestamps = false;
}
