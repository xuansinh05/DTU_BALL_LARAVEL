<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    public function user(){
        return $this->belongsTo('App\Model\User','user_id','id');
    }

    public function detailbooking(){
        return $this->hasMany('App\Model\DetailBooking','booking_id','id');
    }
}
