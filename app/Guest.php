<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable =[
        'name',
        'email',
        'phone',
        'id_no',
        'location',
        'type',
        'service',
        'number',
        'gender',
        'image'
    ];
}
