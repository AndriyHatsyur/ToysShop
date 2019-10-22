<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'image',  'price', 'sale', 'description',
        'in_stock', 'category_id', 'article', 'manufacturer',
        'size', 'country', 'type'
    ];
}
