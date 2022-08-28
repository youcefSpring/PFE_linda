<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{

    protected $fillable=['status'];


    public function get_color(){

        switch($this->status){
         case 'Accepté':
            return "green";
            break;
        case 'Refusé':
            return 'red';
            break;
        default:
         return "white";

        }
       }
}
