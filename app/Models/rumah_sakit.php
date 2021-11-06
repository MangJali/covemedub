<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumah_sakit extends Model
{
    use HasFactory;
    public $table = "rumah_sakit";
    protected $fillable = [
        'kota',
        'nama',
        'jenis',
        'tipe',
        'alamat',
        'no_telp',
    ];
}
