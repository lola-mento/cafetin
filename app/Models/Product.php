<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable =
    [
        'name',
        'reference',
        'price',
        'weight',
        'stock',
        'category_id',
    ];

    use HasFactory;
}
