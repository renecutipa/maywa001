<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegiado extends Model
{
    //

    protected $fillable = [
        'codigoCIP', 
        'dni', 
        'paterno', 
        'materno', 
        'nombres', 
        'ultimoPago', 
        'habilHasta', 
        'nombreFoto',
    ];
}
