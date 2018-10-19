@extends('sistema.prueba')
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
                                    <h3 class="text-center title-2">Alta maestro</h3>
                                </div>
                                
                                <form  action =  "{{route('guardamaestro')}}" method = "POST" enctype='multipart/form-data'>
                                {{csrf_field()}}
                                    <div class="form-group">
                                    @if($errors->first('idm')) 
                                    <i> {{ $errors->first('idm') }} </i> 
                                    @endif
                                        <label for="cc-payment" class="control-label mb-1">Id avance</label>
                                        <input id="cc-pament" name="idm" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{$idms}}" readonly ='readonly'>
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                        <br>
                                        @if($errors->first('nombre')) 
                                    <i style="color:rgb(255,0,0);" > {{ $errors->first('nombre') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="nombre" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{old('nombre')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Edad</label>
                                        <br>
                                        @if($errors->first('edad')) 
                                    <i style="color:rgb(255,0,0);" > {{ $errors->first('edad') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="edad" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{old('edad')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Sexo</label>
                                        <input type = 'radio' name = 'sexo' value = 'M' checked>M
                                        <input type = 'radio' name = 'sexo' value = 'F'>F
                                    </div>

                                    <div class="form-group">
                                   
                                        <label for="cc-payment" class="control-label mb-1">Código postal</label>
                                        <br>
                                        @if($errors->first('cp')) 
                                    <i  style="color:rgb(255,0,0);" > {{ $errors->first('cp') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="cp" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{old('cp')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Beca</label>
                                        <br>
                                    @if($errors->first('beca')) 
                                    <i  style="color:rgb(255,0,0);" > {{ $errors->first('beca') }} </i> 
                                    @endif
                                        <input id="cc-pament" name="beca" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" value="{{old('beca')}}">
                                    </div>

                                    <div class="form-group">
                                    Seleccione carrera<select name = 'idc'>
                                     @foreach($carreras as $cr)
			                        <option value = '{{$cr->idc}}'>{{$cr->nombre}}</option>
			                        @endforeach
                                     </select>
                                    </div>

                                    <div class="form-group">
                                    <br>
                                    <label for="cc-payment" class="control-label mb-1">Seleccione archivo</label>
                                    @if($errors->first('archivo')) 
                                    <i  style="color:rgb(255,0,0);"> {{ $errors->first('archivo') }} </i> 
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