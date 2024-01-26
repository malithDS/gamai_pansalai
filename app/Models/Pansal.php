<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pansal extends Model
{
    use HasFactory;

    protected $table = "pansal";

    protected $fillable = [
        'name',
        'review',
        'thero',
        'town',
        'details',
        'gallery',
        'history',
        'monk',
        'location',
        
    ];
}
