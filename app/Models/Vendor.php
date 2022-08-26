<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Authenticatable
{
    protected $fillable=['id'];
}
