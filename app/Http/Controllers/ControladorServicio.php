<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\servicios;

class ControladorServicio extends Controller
{
    public function altaservicio()
    {
     	 //select * from carreras     all()
		 //select * from carreras where activo = 'si'
	 //  group by nombre asc
		 
	   $clavequesigue = servicios::orderBy('id_servicio','desc')
								->take(1)
								->get();
     $idServicios = $clavequesigue[0]->id_servicio+1;
	 
	/* $carreras = carreras::where('activo','=','SI')
	                      ->orderBy('nombre','asc')
						  ->get();*/
	 //return $carreras;
     return view ("maquinados.altaservicio")
	        //->with('carreras',$carreras)
			->with('idServicios',$idServicios);
    }
    
    public function guardaservicio(Request $request)
    {
        $id_servicio =  $request->id_servicio;
        $descripcion = $request->descripcion;
        $activo = $request->activo;
        
		 $this->validate($request,[
	     'id_servicio'=>'required',
         'descripcion'=>'required',
         'activo'=>'required'
	     ]);
	/*	 
     $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
     {
	 $img2= 'sinfoto.png';
	 }*/
	 
            $servi = new servicios;
			$servi->id_servicio = $request->id_servicio;
			$servi->descripcion = $request->descripcion;
			$servi->activo =$request->activo;
		    if($servi->save()){
				return back()->with('msj','Servicio guardado correctamente');
			}else{
				return back();
			}
        
    }
    public function reporteservicios()
	{
	$servicios=servicios::orderBy('id_servicio','asc')
	          ->get();
	  return view('maquinados.reporteServicio')
	  ->with('servicios',$servicios);                  
	}
	public function modificaservicio($id_servicio)
	{
		$servicio = servicios::where('id_servicio','=',$id_servicio)
		                     ->get();
	/*	$idc = $maestro[0]->idc;
		$carrera = carreras::where('idc','=',$idc)->get();
		
		$otrascarreras = carreras::where('idc','!=',$idc)
		                 ->get();*/
		//return $carrera;
		//return $maestro;
		return view ('maquinados.modificaservicio')
		->with('servicio',$servicio[0]);
	    //->with('idc',$idc)
	   // ->with('carrera',$carrera[0]->nombre)
		//->with('otrascarreras',$otrascarreras);
	
	}
    public function guardamodificaservicio(Request $request)
	{
		$id_servicio =  $request->id_servicio;
        $descripcion = $request->descripcion;
        $activo = $request->activo;
        
		 $this->validate($request,[
         'id_servicio'=>'required',
         'descripcion'=>'required',
		 'activo'=>'required'
	     ]);
		 /* $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file)); 
	 }*/
	        $servi = servicios::find($id_servicio);
	        $servi->id_servicio = $request->id_servicio;
			$servi->descripcion = $request->descripcion;
			$servi->activo =$request->activo;
			if($servi->save()){
				return back()->with('msj','Servicio modificado correctamente');
			}else{
				return back();
			}
	 
	 
	 
	 
	 
		 echo "Listo para modificar";
	}
	public function eliminaservicio($id_servicio)
	{
			if(servicios::find($id_servicio)->delete()){
				return back()->with('msj','Servicio eliminado correctamente');
			}else{
				return back();
			}
	}

}
