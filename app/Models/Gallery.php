<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
      protected $fillable = [
        'title',
        'type',
        'path',
        'description',
    ];

    // Optional: detect if it's an image or video
    public function isImage()
    {
        return $this->type === 'image';
    }

    public function isVideo()
    {
        return $this->type === 'video';
    }
}
