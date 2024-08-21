<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{
    use HasFactory;

    public function administrador(){
        return $this->belongsTo('App\Models\Propietario');
    }

    public function Normas(){
        return $this->hasMany('app\Models\NormasXQuejas');
    }

    public function quejas(){
        return $this->hasMany('app\Models\QuejaXPropietario');
    }

   
}
