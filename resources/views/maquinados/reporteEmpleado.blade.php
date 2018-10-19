@extends('maquinados.principal')
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
                                                <th>Id cliente</th>
                                                <th>Nombre</th>
                                                <th>Apellido paterno</th>
                                                <th>Apellido materno</th>
                                                <th>Empresa</th>
                                                <th>Calle</th>
                                                <th>Número</th>
                                                <th>Localidad</th>
                                                <th>Activo</th>
                                                <th>Operaciones</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clientes as $client)
                                            <tr>
                                                <td>{{$client->id_cliente}}</td>
                                                <td>{{$client->nombre_cliente}}</td>
                                                <td>{{$client->apellido_paterno_cliente}}</td>
                                                <td>{{$client->apellido_materno_cliente}}</td>
                                                <td>{{$client->empresa}}</td>
                                                <td>{{$client->calle}}</td>
                                                <td>{{$client->num}}</td>
                                                <td>{{$client->localidad}}</td>
                                                <td>{{$client->activo}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="{{URL::action('ControladorCliente@modificacliente',['id_cliente'=>$client->id_cliente])}}" class="zmdi zmdi-edit"> 
                                                </a>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <a href="{{URL::action('ControladorCliente@eliminacliente',['id_cliente'=>$client->id_cliente])}}" class="zmdi zmdi-delete"> 
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