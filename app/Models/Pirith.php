<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pirith extends Model
{
    use HasFactory;

    protected $table = "pirith";

    protected $fillable = [
        'name',
        'image',
        'media',
    ];
}
