<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'starts_at',
        'ends_at',
        'location',
        'description',
        'status',
        'featured',
        'thumbnail',
        'banner',
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'featured' => 'boolean',
    ];
}
