<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ACSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ac')->insert([
            [
                'lokasi'        => 'FM Mangga Besar',
                'tanggal'       => '2025-06-04',
                'nama_barang'   => 'AC Split Wall',
                'qty'           => 6,
                'harga_satuan'  => 65000,
                'total_harga'   => 390000,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'lokasi'        => 'FM Mangga Besar',
                'tanggal'       => '2025-06-04',
                'nama_barang'   => 'AC Cassette',
                'qty'           => 1,
                'harga_satuan'  => 250000,
                'total_harga'   => 250000,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'lokasi'        => 'FM Green Office Park (GOP)',
                'tanggal'       => '2025-06-04',
                'nama_barang'   => 'AC Split Wall',
                'qty'           => 1,
                'harga_satuan'  => 65000,
                'total_harga'   => 65000,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'lokasi'        => 'FM Green Office Park (GOP)',
                'tanggal'       => '2025-06-04',
                'nama_barang'   => 'AC Cassette',
                'qty'           => 1,
                'harga_satuan'  => 250000,
                'total_harga'   => 250000,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
