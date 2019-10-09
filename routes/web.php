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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///CATALOGOS
Route::resource('/jobs','JobController');
Route::resource('/departamento','DepartamentoController');
Route::resource('/conceptsat','ConceptsatController');
Route::resource('/empresas','EmpresaController');
Route::resource('/prestaciones','PrestacionesController');
////////
Route::resource('/conceptosempresas','ConceptosEmpresaController');
Route::resource('/empleados','EmpleadoController');
Route::resource('/incidencias','IncidenciaController');
Route::resource('/usuarios','UsersController');