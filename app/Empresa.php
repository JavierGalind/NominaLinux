<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['nombre_empresa', 'rfc', 'egistro_estado', 'telefono','status','registro_patronal','razon_social','representante_laboral','rfc_representante','direccion','numero_interno','numero_externo','colonia','estado','cp','id_prestaciones'];
}
