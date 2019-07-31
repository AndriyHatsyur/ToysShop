<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    protected $fillable = [
        'count', 'price', 'product_id', 'order_id'
    ];
}
