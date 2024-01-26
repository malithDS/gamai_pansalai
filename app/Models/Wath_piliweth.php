<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wath_piliweth extends Model
{
    use HasFactory;

    protected $table = "wath_piliweth";

    protected $fillable = [
        'topic',
        'details',
        'image'
    ];
}
