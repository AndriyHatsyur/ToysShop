<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'code', 'name'
    ];

    public function orders()
    {
        return $this->hasOne('App\Models\Order');
    }
}
