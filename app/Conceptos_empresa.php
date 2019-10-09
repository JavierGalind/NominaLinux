<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conceptos_empresa extends Model
{
    public function conceptosat(){ //$libro->categoria->nombre
        return $this->belongsTo('App\Conceptsat',); //Pertenece a una categoría.
    }
}