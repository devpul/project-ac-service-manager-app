<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ACSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ACSeeder::class,
            GajiKaryawanSeeder::class,
            KalenderSeeder::class,
            TokoSeeder::class
        ]);
    }
}
