<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'role_id',
        'username',
        'password',
        'email',
        'phone',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
