<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestaciones extends Model
{
    protected $fillable=['anio', 'aguinaldo', 'vacaciones', 'prima_vacacional','bono','vales','fondo','id_empresa'];
}
