<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $table = 'vehiculos';
    protected $primaryKey = 'ids';
    protected $fillable = ['tipoVehiculos', 'categorias'];
    public $timestamps = true;
    
}