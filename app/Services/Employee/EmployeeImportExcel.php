<?php

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $data = $row->toArray();

        $user = User::firstOrCreate(['email' => $data['email']], 
        [
            'username'  =>  $data['username'],
            'password'  =>  $data['password'],
            'email'     =>  $data['email'],
        ]);

        $karyawan = Karyawan::updateOrCreate([

        ]);



        // $user = User::firstOrCreate(
        //     ['email' => $data['email']],
        //     [
        //         'name' => $data['name'],
        //         'password' => Hash::make('default')
        //     ]
        // );

        // Karyawan::updateOrCreate(
        //     ['user_id' => $user->id],
        //     [
        //         'nama_karyawan' => $data['nama'],
        //         'tugas_karyawan' => $data['tugas'],
        //         'absen' => null,
        //         'jadwal_karyawan' => $data['jadwal']
        //     ]
        // );
    }
}
