<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function delivery(){
        return $this->hasMany('App\Models\Delivery');
    }

    public function detail_sale(){
        return $this->hasMany('App\Models\DetailSale');
    }

}
