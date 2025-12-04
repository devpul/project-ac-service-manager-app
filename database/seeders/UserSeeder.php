<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'role_id'       =>  1,
                'username'      =>  'Admin',
                'password'      =>  Hash::make('admin'),
                'email'         =>  'admin@gmail.com',
                'phone'         =>  '08387593286',
                'fullname'      =>  'Admin Ganteng',
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],

            [
                'role_id'       =>  2,
                'username'      =>  'Manager',
                'password'      =>  Hash::make('manager'),
                'email'         =>  'manager@gmail.com',
                'phone'         =>  '08387593286',
                'fullname'      =>  'Manager Ganteng',
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],

            [
                'role_id'       =>  3,
                'username'      =>  'User',
                'password'      =>  Hash::make('user'),
                'email'         =>  'user@gmail.com',
                'phone'         =>  '08387593286',
                'fullname'      =>  'User Ganteng',
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ]
            
        ]);
    }
}
