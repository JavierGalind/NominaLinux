<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conceptsat extends Model
{
    protected $fillable=['id','clave_sat','concepto','fecha_vigencia','tipo'];
}
