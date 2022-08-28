<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condidate extends Model
{
    //
   protected $fillable=['status'];


   public function get_color(){

    switch($this->status){
     case 'Accepté':
        return "yellow";
        break;
    case 'Refusé':
        return 'red';
        break;
    default:
     return "white";

    }
   }

}

