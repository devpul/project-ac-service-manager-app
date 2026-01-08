<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    
    protected $fillable = [
        'user_id',
        'nama_karyawan',
        'tugas_karyawan',
        'absen',
        'jadwal_karyawan'
    ];

    public $casts = [
        'jadwal_karyawan'   =>  'datetime'
    ];
    
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
