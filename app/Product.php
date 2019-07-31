<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'image', 'count', 'price', 'sale', 'description',
        'is_active', 'category_id'
    ];
}
