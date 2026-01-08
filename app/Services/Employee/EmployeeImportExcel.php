<?php

namespace App\Services\Employee;

use App\Models\User;
use App\Models\Karyawan;
use Maatwebsite\Excel\Row;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\OnEachRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImportExcel implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $data = $row->toArray();

        $username = $data['username'];
        $email    = $data['email'];
        $tugas    = $data['tugas'];
        $jadwal   = Date::excelToDateTimeObject($data['jadwal'])
                        ->format('Y-m-d H:i');

        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'role_id'   =>  3,
                'username' => $username,
                'password' => Hash::make('default'),
            ]
        );

        Karyawan::updateOrCreate(
            ['user_id' => $user->id],
            [
                'tugas_karyawan'  => $tugas,
                'absen'           => null,
                'jadwal_karyawan' => $jadwal
            ]
        );
    }
}
