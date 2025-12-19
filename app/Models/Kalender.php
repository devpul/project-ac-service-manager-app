<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    protected $table = 'calendars';

    protected $fillable = [
        'title',
        'start',
        'end'
    ];

    public $timestamps = false;

}
