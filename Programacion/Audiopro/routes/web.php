<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::get('entradaArticulo', function () {
	return view('paginas.EntradaArticulo');
});
Route::get('salidaArticulo', function () {
	return view('paginas.SalidaArticulo');
});
Route::get('ordenServicio', function () {
	return view('layouts.ordenServicio');
});

Route::get('crearCliente', function () {
	return view('paginas.crearCliente');
	//echo "Crear cliente";
});

//Route::resource('crearCliente','crearCliente');
Route::match(["get", "post"],'crearClienteI','crearCliente@insertar');
//rutas en consultar
Route::get('consultar', 'consultarArticulo@mostrar');
	//detalles;
Route::get('consultar/detalles/{id}/{estado?}','detallesArticulo@index');
	//diagnosticar
Route::get('consultar/diagnosticar/{id}/{estado?}','diagnosticarArticulo@index');
Route::post('consultar/diagnosticar/{id}','diagnosticarArticulo@insert');
	//reparar
Route::get('consultar/reparar/{id}/{estado?}','reparar@index');
Route::post('consultar/reparar/{id}','reparar@insert');

Route::get('layouts/{cc}', 'consultaCliente@consultaCliente');
Route::get('/layouts/orden', 'RegistraEntradaArticulo@insert');
Route::post('layouts', 'RegistraEntradaArticulo@insert');