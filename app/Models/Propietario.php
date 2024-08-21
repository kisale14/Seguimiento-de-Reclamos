<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    public function administrador(){
        return $this->belongsTo('App\Models\Administradore');
    }

    public function PropietariosXApartamentos(){
        return $this->hasMany('app\Models\PropietariosXApartamento');
    }

    public function Reclamos(){
        return $this->hasMany('app\Models\Queja');
    }

    public function quejas(){
        return $this->hasMany('app\Models\QuejaXPropietario');
    }

    

}
