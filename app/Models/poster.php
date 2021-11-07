<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poster extends Model
{
    use HasFactory;
    public $table = "poster";
    protected $fillable = [
        'judul',
        'link_poster',
        'konten'
    ];
}
