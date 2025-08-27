<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author_name', 'price', 'stock', 'image_path', 'text'
    ];

    protected $casts = [
        'price' => 'integer',
        'stock' => 'integer',
    ];
}
