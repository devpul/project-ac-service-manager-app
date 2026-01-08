<?php

namespace App\Models;

use App\Models\Karyawan;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    protected $table = 'users';

    protected $fillable = [
        'role_id',
        'username',
        'password',
        'email',
        'fullname',
        'phone',
        'email_verified_at'
        // timestamps
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function karyawan()
    {
        return $this->hasOne(Karyawan::class, 'user_id');
    }
}
