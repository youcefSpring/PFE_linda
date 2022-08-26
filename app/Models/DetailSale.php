<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailSale extends Model
{
    public function sale(){
        return $this->belongsTo('App\Models\Sale');
    }

    public function product(){

        return $this->belongsTo('App\Models\Product');
    }
}
