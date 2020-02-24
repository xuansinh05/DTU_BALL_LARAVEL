<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    public function products(){
        return $this->hasMany('App\Model\Product','supplier_id','id');
    }

    public function category(){
        return $this->belongsTo('App\Model\Category','category_id','id');
    }
}
