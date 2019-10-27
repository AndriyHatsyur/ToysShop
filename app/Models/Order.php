<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'last_name', 'surname', 'email', 'phone', 'region', 'town', 'post',
        'status_id', 'paid', 'count', 'sum'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\OrderedProduct');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }
}
