<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idiriyata_ena_daham_wedasatahan extends Model
{
    use HasFactory;

    protected $table = "idiriyata_ena_daham_wedasatahan";

    protected $fillable = [
        'name',
        'details',
        'image',
        
    ];
}
