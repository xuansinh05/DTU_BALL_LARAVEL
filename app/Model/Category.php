<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table = 'categories';

    public function products(){
        return $this->hasMany('App\Model\Product','category_id','id');
    }
}
