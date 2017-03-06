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



//rota para o exame
Route::get('/exames','ExamesController@index');

//rota para a pagina  de criar
Route::get('/exames/cria','ExamesController@cria');

//rota para criar um exame
Route::post('/exames', 'EditoraController@armazena');

//Rota para exame/1 ex
Route::get('/exames/{exame}','ExamesController@show');

//rota para medicos/1
Route::get('/medicos/{medico}','MedicosController@show');

// rota para medicos
Route::get('/medicos','MedicosController@index');

// rota para pedidos
Route::get('/pedidos','PedidosController@index');

//rota para pedidos/1
Route::get('/pedidos/{pedido}','PedidosController@show');

// rota para pedidos
Route::get('/pacientes','PacientesController@index');

//rota para pedidos/1
Route::get('/pacientes/{paciente}','PacientesController@show');