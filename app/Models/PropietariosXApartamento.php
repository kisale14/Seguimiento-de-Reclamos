<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropietariosXApartamento extends Model
{
    use HasFactory;

    public function propietarios(){
        return $this->hasMany('app\Models\Apartamento');
    }

    public function ApartamentosXPropietario(){
        return $this->hasMany('app\Models\Propietario');
    }
}
