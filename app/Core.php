<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Core extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'username', 'email', 'password', 'role'
    ];

    protected $hidden = [
        'password',
    ];
}
