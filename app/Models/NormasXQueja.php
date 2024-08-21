<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NormasXQueja extends Model
{
    use HasFactory;

    public function quejas(){
        return $this->belongsTo('App\Models\Queja');
    }

    public function normas(){
        return $this->belongsTo('App\Models\Norma');
    }
}
