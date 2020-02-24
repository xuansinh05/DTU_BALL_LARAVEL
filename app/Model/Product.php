<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category(){
        return $this->belongsTo('App\Model\Category','category_id','id');
    }
    public function supplier(){
        return $this->belongsTo('App\Model\Supplier','supplier_id','id');
    }
    public function detailbookings(){
        return $this->hasMany('App\Model\DetailBooking','product_id','id');
    }
}
