<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    //
    protected $table = "reuniones";
    protected $fillable = ['nombre', 'fecha', 'hora'];
}
