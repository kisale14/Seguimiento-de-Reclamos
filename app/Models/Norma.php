<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norma extends Model
{
    use HasFactory;

    public function Quejas(){
        return $this->hasMany('app\Models\NormasXQuejas');
    }
}
