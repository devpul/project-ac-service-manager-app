<?php

namespace Database\Seeders;

use App\Models\GajiKaryawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GajiKaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GajiKaryawan::insert([
            [
                // pendapatan
                'gaji_pokok'            =>  10000000,
                'tunjangan_jabatan'     =>  1000000,
                'tunjangan_daerah'      =>  1000000,
                'tunjangan_pph'         =>        0,
                
                // potongan
                'iuran_dana_pensiun'    =>  100000,
                'potongan_pph'          =>  422500,

                'created_at'         => now()
            ],
        ]);
    }
}
