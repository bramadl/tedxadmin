<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiens extends Model
{
    protected $fillable = [
        "first_name", "last_name", "username", "email_address", "password"
    ];
}
