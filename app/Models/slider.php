<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    public $table = "slider";
    protected $fillable = [
        'judul',
        'link_gambar',
        'konten'
    ];
}
