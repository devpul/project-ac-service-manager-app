<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'tokos';

    protected $fillable = [
        'site',
        'site_description',
        'store_type',
        'go_date',
        'province',
        'city',
        'district',
        'address'
    ];
}
