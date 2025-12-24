<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GajiKaryawan extends Model
{
    protected $table = 'gaji_karyawans';

    protected $fillable = [
        // pendapatan
        'gaji_pokok',
        'tunjangan_jabatan',
        'tunjangan_daerah',
        'tunjangan_pph',
        
        // potongan
        'iuran_dana_pensiun',
        'potongan_pph',

        'jumlah_pendapatan',
        'jumlah_potongan'
    ];
}
