<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "product",
        "price",
        "username",
        "email",
        "phone_number",
        "address",
        "kelurahan",
        "kecamatan",
        "kabupaten",
        "provinsi",
        "kode_pos",
        "size",
        "color",
    ];
}
