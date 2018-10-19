<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;

class ControladorEmpleado extends Controller
{
    public function altaempleado()
    {
         $clavequesigue = empleados::orderBy('id_empleado','desc')
         ->take(1)
         ->get();
     $idEmpleados = $clavequesigue[0]->id_empleado+1;
     return view ("maquinados.altaempleado")
			->with('idEmpleados',$idEmpleados);
    }
    public function guardaempleado(Request $request)
    {
        $id_empleado =  $request->id_empleado;
        $nombre_empleado = $request->nombre_empleado;
        $apellido_materno_empleado = $request->apellido_materno_empleado;
        $apellido_paterno_empleado = $request->apellido_paterno_empleado;
        $edad = $request->edad;
        $curp = $request->curp;
        $NSS = $request->NSS;
        $fecha_ingreso = $request->fecha_ingreso;
        $puesto = $request->puesto;
        $activo = $request->activo;

		 $this->validate($request,[
             'id_empleado'=>'required',
             'nombre_empleado'=>'required',
             'apellido_materno_empleado'=>'required',
             'apellido_paterno_empleado'=>'required',
             'edad'=>'required',
             'curp'=>'required',
             'NSS'=>'required',
             'fecha_ingreso'=>'required',
             'puesto'=>'required',
             'activo'=>'required'
	     ]);
	 
            $emplead = new empleados;
            $emplead->id_empleado =  $request->id_empleado;
            $emplead->nombre_empleado = $request->nombre_empleado;
            $emplead->apellido_materno_empleado = $request->apellido_materno_empleado;
            $emplead->apellido_paterno_empleado = $request->apellido_paterno_empleado;
            $emplead->edad = $request->edad;
            $emplead->curp = $request->curp;
            $emplead->NSS = $request->NSS;
            $emplead->fecha_ingreso = $request->fecha_ingreso;
            $emplead->puesto = $request->puesto;
            $emplead->activo = $request->activo;
		    if($emplead->save()){
				return back()->with('msj','Empleado guardado correctamente');
			}else{
				return back();
			}
    }
    public function reporteempleados()
	{
	$empleados=empleados::orderBy('id_empleado','asc')
	          ->get();
	  return view('maquinados.reporteEmpleado')
	  ->with('empleados',$empleados);                  
    }
    public function modificaempleado($id_empleado)
	{
		$empleados = empleados::where('id_empleado','=',$id_empleado)
		                     ->get();
		return view ('maquinados.modificaempleado')
		->with('empleado',$empleado[0]);
	}
    public function guardamodificaempleado(Request $request)
	{
        $id_empleado =  $request->id_empleado;
        $nombre_empleado = $request->nombre_empleado;
        $apellido_materno_empleado = $request->apellido_materno_empleado;
        $apellido_paterno_empleado = $request->apellido_paterno_empleado;
        $edad = $request->edad;
        $curp = $request->curp;
        $NSS = $request->NSS;
        $fecha_ingreso = $request->fecha_ingreso;
        $puesto = $request->puesto;
        $activo = $request->activo;
        
        $this->validate($request,[
            'id_empleado'=>'required',
            'nombre_empleado'=>'required',
            'apellido_materno_empleado'=>'required',
            'apellido_paterno_empleado'=>'required',
            'edad'=>'required',
            'curp'=>'required',
            'NSS'=>'required',
            'fecha_ingreso'=>'required',
            'puesto'=>'required',
            'activo'=>'required'
        ]);
        $emplead = new empleados;
        $emplead->id_empleado =  $request->id_empleado;
        $emplead->nombre_empleado = $request->nombre_empleado;
        $emplead->apellido_materno_empleado = $request->apellido_materno_empleado;
        $emplead->apellido_paterno_empleado = $request->apellido_paterno_empleado;
        $emplead->edad = $request->edad;
        $emplead->curp = $request->curp;
        $emplead->NSS = $request->NSS;
        $emplead->fecha_ingreso = $request->fecha_ingreso;
        $emplead->puesto = $request->puesto;
        $emplead->activo = $request->activo;
			if($emplead->save()){
				return back()->with('msj','Empleado modificado correctamente');
			}else{
				return back();
			}
		 echo "Listo para modificar";
	}
	public function eliminaempleado($id_empleado)
	{
			if(empleados::find($id_empleado)->delete()){
				return back()->with('msj','Empleado eliminado correctamente');
			}else{
				return back();
            }
        }
}
