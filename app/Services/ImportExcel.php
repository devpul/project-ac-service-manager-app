<?php

namespace Services;

use App\Services;


use App\Models\Toko;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportExcel implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Toko([
            'site'              =>  $row['site'],
            'site_descr'        =>  $row['site_description'],
            'store_type'        =>  $row['store_type'],
            'go_date'           =>  Date::excelToDateTimeObject($row['go_date'])
                                        ->format('Y-m-d'),
            'province'          =>  $row['province'],
            'city'              =>  $row['city'],
            'district'          =>  $row['district'],
            'address'           =>  $row['address']
        ]);
    }
}