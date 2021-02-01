<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    public function respuestapadre(){

       return $this->hasOne('App\Models\Respuesta');

    }
    public function duda(){

       return $this->hasOne('App\Models\Duda');

    }

    public function user(){

       return $this->belongsTo('App\Models\User');

    }
}
