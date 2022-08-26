<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{

    protected $table='deliveries';

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
    public function provider(){
        return $this->belongsTo('App\Models\Provider');
    }
}
