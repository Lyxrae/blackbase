<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
     protected $fillable = [
        'name',
        'slug',
        'description',
        'message',
        'image',
        'gallery',
    ];

    protected $casts = [
        'gallery' => 'array',
    ];

    // Auto-generate slug if not provided
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->name);
            }
        });
    }
}
