<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[
        'service_name',
        'service_status',
        'service_price',
        'service_type',
        'gender'
    ];
}
