<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Toko::insert([
            [
                'site' => '28',
                'site_descr' => 'MANGGA BESAR',
                'store_type' => 'CVS',
                'go_date' => '2015-08-14',
                'province' => 'DKI Jakarta',
                'city' => 'Jakarta Barat',
                'district' => 'Taman Sari',
                'address' => 'Jl. Mangga Besar Raya No. 90 B Kel. Mangga Besar. Kec. Taman Sari 11180',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'site' => '38',
                'site_descr' => '18 TH RESIDENCE (KUNINGAN)',
                'store_type' => 'Housing',
                'go_date' => '2016-08-19',
                'province' => 'DKI Jakarta',
                'city' => 'Jakarta Selatan',
                'district' => 'Setia Budi',
                'address' => 'Jl. Taman Rasuna Tim, Rt. 16/Rw.1, Menteng Atas, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12960',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
