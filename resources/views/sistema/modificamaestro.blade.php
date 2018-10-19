@extends('sistema.pruebaModificaciones')
@section('contenido')
<!-- MAIN CONTENT-->

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" style="height: 1000px;">
                <div class="col-md-6 offset-md-3 mr-auto ml-auto">
                    <section class="card">
                        <div class="card-body text-secondary">
                         @if(session()->has('msj'))
                           <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
											{{ session('msj') }}
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
							</div>
                            @else
                        @endif
                            <div class="card-header">Universidad Tecnológica del Valle de Toluca</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Modificación maestro</h3>
                                </div>
                                
                                <form action =  "{{route('guardamodificam')}}"  method = "POST" enctype='multipart/form-data'>
                                {{csrf_field()}}
                                    <div class="form-group">
                                    @if($errors->first('idm')) 
                                    <i> {{ $errors->first('idm') }} </i> 
                                    @endif
                                        <label for="cc-payment" class="control-label mb-1">Id avance</label>
                                        <input id="cc-pament" name="idm" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{$maestro->idm}}" readonly ='readonly'>
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                        <br>
                                        @if($errors->first('nombre')) 
                                    <i style="color:rgb(255,0,0);" > {{ $errors->first('nombre') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="nombre" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false"  value="{{$maestro->nombre}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Edad</label>
                                        <br>
                                        @if($errors->first('edad')) 
                                    <i style="color:rgb(255,0,0);" > {{ $errors->first('edad') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="edad" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{$maestro->edad}}">
                                    </div>
                                    <div class="form-group">
                                    @if($maestro->sexo=='M') 
                                        <label for="cc-payment" class="control-label mb-1">Sexo</label>
                                        <input type = 'radio' name = 'sexo' value = 'M' checked>M
                                        <input type = 'radio' name = 'sexo' value = 'F'>F
                                        <br>
                                    @else

                                        <label for="cc-payment" class="control-label mb-1">Sexo</label>
                                        <input type = 'radio' name = 'sexo' value = 'M' checked>M
                                        <input type = 'radio' name = 'sexo' value = 'F'>F
                                        <br>
                                    @endif
                                    </div>

                                    <div class="form-group">
                                   
                                        <label for="cc-payment" class="control-label mb-1">Código postal</label>
                                        <br>
                                        @if($errors->first('cp')) 
                                    <i  style="color:rgb(255,0,0);" > {{ $errors->first('cp') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="cp" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{$maestro->cp}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Beca</label>
                                        <br>
                                    @if($errors->first('beca')) 
                                    <i  style="color:rgb(255,0,0);" > {{ $errors->first('beca') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="beca" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false"  value="{{$maestro->beca}}">
                                    </div>

                                     <div class="form-group">
                                     <label for="cc-payment" class="control-label mb-1">Seleccione carrera</label>
                                     <select name = 'idc' class="form-control">
                                    <option value = '{{$idc}}'>{{$carrera}}</option>
	                                @foreach($otrascarreras as $oc)
	                                <option value = '{{$oc->idc}}'>{{$oc->nombre}}</option>
	                               @endforeach
                                     </select>
                                    </div>


                                    <div class="form-group">
                                    <img src = "{{asset('archivos/'.$maestro->archivo)}}"
                                    height =100 width=100>
                                    </div>
                                    <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Seleccione foto</label>
                                    <br>
                                    @if($errors->first('archivo')) 
                                    <i   style="color:rgb(255,0,0);"> {{ $errors->first('archivo') }} </i> 
                                    @endif
                                    <input type='file' name ='archivo'>
                                    </div>
                                    <div>
                                    <input type = 'submit' value = 'Guardar' 
                                    id="payment-button" type="submit" 
                                    class="btn btn-lg btn-info btn-block">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@stop