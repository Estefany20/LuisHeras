<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $primaryKey = 'id_servicio';  
    protected $fillable=['id_servicio','descripcion','activo'];
}
