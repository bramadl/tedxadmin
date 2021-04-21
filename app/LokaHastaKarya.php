<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LokaHastaKarya extends Model
{
    protected $table = 'loka_hasta_karya';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_wa',
        'instansi_komunitas',
        'media_sosial',
        'bentuk_karya',
        'judul_karya',
        'deskripsi_karya',
        'tahun_pembuatan_karya',
        'file_karya',
        'sumber_informasi',
        'status'
    ];
}
