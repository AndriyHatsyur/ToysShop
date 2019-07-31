<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'full_name', 'email', 'phone', 'user_id', 'region', 'town', 'post',
        'status_id', 'comment'
    ];
}
