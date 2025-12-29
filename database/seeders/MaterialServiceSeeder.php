<?php

namespace Database\Seeders;

use App\Models\MaterialService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaterialServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialService::insert([
            [
                'nama_toko'     => 'Toko Maju Jaya',
                'nama_barang'     => 'Air Conditioner 1',
                'nama_pic'      => 'Budi Santoso',
                'pic_telepon'    => '081234567890',
                'jadwal_visit'  => '2025-01-10',
            ],
            [
                'nama_toko'     => 'Toko Sumber Rezeki',
                'nama_barang'     => 'Air Conditioner 1',
                'nama_pic'      => 'Siti Aminah',
                'pic_telepon'    => '082233445566',
                'jadwal_visit'  => '2025-01-12',
            ],
            [
                'nama_toko'     => 'Toko Sejahtera',
                'nama_barang'     => 'Air Conditioner 1',
                'nama_pic'      => 'Agus Prayitno',
                'pic_telepon'    => '081998877665',
                'jadwal_visit'  => '2025-01-15',
            ],
        ]);
    }
}
