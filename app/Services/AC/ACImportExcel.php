<?php

namespace Services;

use App\Models\AC;
use App\Services;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ACImportExcel implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new AC([
            'nama_barang'   => $row['nama_barang'],
            'satuan'        => $row['satuan'],
            'harga_satuan'  => $row['harga_satuan'],
            'jumlah_harga'  => $row['jumlah_harga'],
        ]);
    }
}