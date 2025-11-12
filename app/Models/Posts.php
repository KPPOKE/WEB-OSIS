<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['name', 'slug', 'author', 'body', 'status', 'published_at', 'thumbnail'];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
