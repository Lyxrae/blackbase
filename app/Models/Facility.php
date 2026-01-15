<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
     protected $fillable = [
        'name',
        'description',
        'message',
        'image',
        'gallery',
        'slug',
    ];

    protected $casts = [
        'gallery' => 'array', // automatically converts JSON to array
    ];
}
