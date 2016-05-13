<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'user_name', 'orderinfo',
    ];
}
