<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailBooking extends Model
{
    protected $table = 'detailbookings';

    public function product(){
        return $this->belongsTo('App\Model\Product','product_id','id');
    }

    public function booking(){
        return $this->belongsTo('App\Model\Booking','booking_id','id');
    }
}
