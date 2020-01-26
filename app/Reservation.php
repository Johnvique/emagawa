<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=[
        'guest_name',
        'check_in',
        'check_out',
        'service_booked',
        'guest_phone',
        'guest_email',
        'book_message'
    ];
}
