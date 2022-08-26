<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nom','prenom','email','matricule'
    ];


    public function fiches()
    {
        return $this->hasMany('App\Models\FichePaie');
    }
}
