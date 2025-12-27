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
                'nama_barang'   => 'AC Split Wall',
                'satuan'           => 6,
                'harga_satuan'  => 65000,
                'jumlah_harga'   => 390000,
            ],
            [
                'lokasi'        => 'FM Mangga Besar',
                'nama_barang'   => 'AC Cassette',
                'satuan'           => 1,
                'harga_satuan'  => 250000,
                'jumlah_harga'   => 250000,
            ],
            [
                'lokasi'        => 'FM Green Office Park (GOP)',
                'nama_barang'   => 'AC Split Wall',
                'satuan'           => 1,
                'harga_satuan'  => 65000,
                'jumlah_harga'   => 65000,
            ],
            [
                'lokasi'        => 'FM Green Office Park (GOP)',
                'nama_barang'   => 'AC Cassette',
                'satuan'           => 1,
                'harga_satuan'  => 250000,
                'jumlah_harga'   => 250000,
            ],
        ]);
    }
}
