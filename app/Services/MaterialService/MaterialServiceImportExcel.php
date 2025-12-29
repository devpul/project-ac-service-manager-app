<?php

namespace Services;

use App\Models\AC;
use App\Models\MaterialService;
use App\Services;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MaterialServiceImportExcel implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new MaterialService([
            'nama_barang'       => $row['nama_barang'],
            'jumlah_barang'     => $row['jumlah_barang'],
            'nama_toko'         => $row['nama_toko'],
            'nama_pic'          => $row['nama_pic'],
            'pic_telepon'       => $row['pic_telepon'],
            'jadwal_visit'      =>  Date::excelToDateTimeObject($row['jadwal_visit'])
                                    ->format('Y-m-d'),
        ]);
    }
}