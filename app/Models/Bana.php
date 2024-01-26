<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bana extends Model
{
    use HasFactory;
    
    protected $table = "bana";

    protected $fillable = [
        'thero',
        'title',
        'media',
        'image',
    ];
}
