<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table="rol";
    protected $fillable = ['nombre'];
    protected $guarded= ['id'];
}
