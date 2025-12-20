<?php

namespace Services;

use App\Services;

use App\Models\Toko;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelService implements FromCollection
{
    public function collection()
    {
        return Toko::select([
            'site'
        ])->get();
    }
}   