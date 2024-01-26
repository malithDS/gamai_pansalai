<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dharma_deshana_grantha extends Model
{
    use HasFactory;

    protected $table = "dharma_deshana_grantha";

    protected $fillable = [
        'name',
        'details',
        'author',
        'book_pdf',
        'image',
        
    ];
}
