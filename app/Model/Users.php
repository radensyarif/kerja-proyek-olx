<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $guarded = [];

    protected $fillable = [
        'name',
        'username',
        'email',
        'role',
        'password',
        'phone_number',
        'whatsapp_number',
        'address'
    ];
}
