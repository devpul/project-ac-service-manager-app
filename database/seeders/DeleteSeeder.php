<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

            DB::table('roles')->truncate();
            DB::table('users')->truncate();
            DB::table('ac')->truncate();
            DB::table('gaji_karyawans')->truncate();
            DB::table('calendars')->truncate();
            DB::table('tokos')->truncate();

        Schema::enableForeignKeyConstraints();
    }
}
