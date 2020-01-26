<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable =[
        'title',
        'size',
        'type',
        'number',
        'price',
        'bed_type',
        'status',
        'facility',
    ];
}
