<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
   protected $primaryKey = 'id_cliente';
   protected $fillable=['id_cliente','nombre_cliente','apellido_paterno_cliente',
                        'apellido_materno_cliente','empresa','calle','num','localidad',
                        'activo'];
}
