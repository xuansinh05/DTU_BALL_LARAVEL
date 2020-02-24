<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table= 'users';

    public function role(){
        return $this->belongsTo('App\Model\Role','role_id','id');
    }

    public function bookings(){
        return $this->hasMany('App\Model\Booking','user_id','id');
    }
}
