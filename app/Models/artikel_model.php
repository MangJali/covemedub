<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel_model extends Model
{
    use HasFactory;
    public $table = "artikel";
    protected $fillable = [
        'judul',
        'isi',
    ];
}
