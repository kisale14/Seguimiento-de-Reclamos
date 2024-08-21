<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    use HasFactory;

    public function PropietariosXApartamentos(){
        return $this->hasMany('app\Models\PropietariosXApartamento');
    }
}
