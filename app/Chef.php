<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $fillable =[
        'name',
        'email',
        'phone',
        'id_no',
        'experience',
        'gender',
        'image'
    ];
}
