<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::insert([
            [
                'nama_karyawan'     =>  'Ordaling Limbong',
                'tugas_karyawan'    =>  'Membuat dokumentasi wawancara',
                'absen'             =>  'HADIR',
                'jadwal_karyawan'   =>  '2025-12-11 09:30:00'
            ],
            [
                'nama_karyawan'     =>  'Ronaldo',
                'tugas_karyawan'    =>  'Membuat dokumentasi sepakbola',
                'absen'             =>  'IZIN',
                'jadwal_karyawan'   =>  '2025-12-07 09:30:00'
            ],
            [
                'nama_karyawan'     =>  'Messi',
                'tugas_karyawan'    =>  'Menjuarai Liga Amerika',
                'absen'             =>  'ALPA',
                'jadwal_karyawan'   =>  '2025-12-20 09:30:00'
            ],
        ]);
    }
}
