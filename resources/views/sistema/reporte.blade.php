@extends('sistema.prueba')
@section('contenido')
  
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                            @if(session()->has('msj'))
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            {{ session('msj') }}
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                            @else
                        @endif
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Clave</th>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Edad</th>
                                                <th>Código postal</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($maestros as $ma)
                                            <tr>
                                                <td>{{$ma->idm}}</td>
                                                <td><img src = "{{asset('archivos/'.$ma->archivo)}}"
                                                height =60 width=60>
                                                </td>
                                                <td>{{$ma->nombre}}</td>
                                                <td>{{$ma->edad}}</td>
                                                <td>{{$ma->cp}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="{{URL::action('curso@modificam',['idm'=>$ma->idm])}}"class="zmdi zmdi-edit"> 
                                                </a>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <a href="{{URL::action('curso@eliminam',['idm'=>$ma->idm])}}"  class="zmdi zmdi-delete"> 
                                                </a> 
                                                        </button>
                                                    </div>   
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                                <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>

    </div>
            <!-- END HEADER DESKTOP-->
                                @stop