<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoXReclamo extends Model
{
    use HasFactory;

    public function quejasXestado(){
        return $this->hasMany('app\Models\QuejaXPropietario');
    }
}
