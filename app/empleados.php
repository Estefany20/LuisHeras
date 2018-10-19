<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $primaryKey = 'id_empleado';
    protected $fillable=['id_empleado','nombre_empleado','apellido_paterno_empleado',
                         'apellido_materno_empleado','edad','curp','NSS','fecha_ingreso','puesto',
                         'activo'];
}
