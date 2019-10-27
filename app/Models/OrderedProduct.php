<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    protected $fillable = [
        'name', 'slug', 'image','count', 'price', 'article', 'order_id'
    ];

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

}
