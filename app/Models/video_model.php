<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video_model extends Model
{
    use HasFactory;
    public $table = "video";
    protected $fillable = [
        'judul',
        'link_thumbnail',
        'link_video',
        'konten'
    ];
}
