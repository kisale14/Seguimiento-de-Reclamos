<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuejaXPropietario extends Model
{
    use HasFactory;

    public function estados(){
        return $this->hasMany('app\Models\EstadoXReclamo');
    }

    public function propietario(){
        return $this->hasMany('app\Models\Propietario');
    }

    public function quejas(){
        return $this->hasMany('app\Models\Queja');
    }
}
