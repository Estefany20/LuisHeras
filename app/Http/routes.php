<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    echo "hola Mundo -- tic 71";
});

Route::get('/areatriangulo', function () {
    $base= 10;
    $altura = 40;
    $area = ($base *$altura)/2;
    echo "El area es" . $area;
});


Route::get('/areatriangulo2/{base}/{altura}',
 function ($base,$altura) {
    $area = ($base *$altura)/2;
    echo "El area es" . $area;
});


Route::get('/mensajito','curso@mensaje');
Route::get('/at','curso@areatriangulo');
Route::get('/ac/{lado}','curso@areacuadrado');
Route::get('/ventas/costos/{cant}/{costo}','curso@total');

Route::get('/altamaestro','curso@altamaestro');
Route::POST('/guardamaestro','curso@guardamaestro')->name('guardamaestro');
Route::get('/reportemaestros','curso@reportemaestros');
Route::get('/modificam/{idm}','curso@modificam')->name('modificam');
Route::POST('/guardamodificam','curso@guardamodificam')->name('guardamodificam');
Route::get('/eliminam/{idm}','curso@eliminam')->name('eliminam');

Route::get('/altaservicio','ControladorServicio@altaservicio');
Route::POST('/guardaservicio','ControladorServicio@guardaservicio')->name('guardaservicio');
Route::get('/reporteservicios','ControladorServicio@reporteservicios');
Route::get('/modificaservicio/{id_servicio}','ControladorServicio@modificaservicio')->name('modificaservicio');
Route::POST('/guardamodificaservicio','ControladorServicio@guardamodificaservicio')->name('guardamodificaservicio');
Route::get('/eliminaservicio/{id_servicio}','ControladorServicio@eliminaservicio')->name('eliminaservicio');

Route::get('/altacliente','ControladorCliente@altacliente');
Route::POST('/guardacliente','ControladorCliente@guardacliente')->name('guardacliente');
Route::get('/reporteclientes','ControladorCliente@reporteclientes');
Route::get('/modificacliente/{id_cliente}','ControladorCliente@modificacliente')->name('modificacliente');
Route::POST('/guardamodificacliente','ControladorCliente@guardamodificacliente')->name('guardamodificacliente');
Route::get('/eliminacliente/{id_cliente}','ControladorCliente@eliminacliente')->name('eliminacliente');

Route::get('/altaempleado','ControladorEmpleado@altaempleado');
Route::POST('/guardaempleado','ControladorEmpleado@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleados','ControladorEmpleado@reporteempleados');
Route::get('/modificaempleado/{id_empleado}','ControladorEmpleado@modificaempleado')->name('modificaempleado');
Route::POST('/guardamodificaempleado','ControladorEmpleado@guardamodificaempleado')->name('guardamodificaempleado');
Route::get('/eliminaempleado/{id_empleado}','ControladorEmpleado@eliminaempleado')->name('eliminaempleado');