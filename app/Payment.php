<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        "user_id", "order_id", "payment_proof", "status", "total"
    ];
}
