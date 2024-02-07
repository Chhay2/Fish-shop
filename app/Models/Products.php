<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'image',
        'description',
    ];

    // If 'image' is a JSON column, cast it to array
    protected $casts = [
        'image' => 'array',
    ];
}