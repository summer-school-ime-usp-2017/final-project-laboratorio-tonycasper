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


//Rota para exame/1 ex
Route::get('/exames/{exames}','ExamesController@index');

//rota para o exame
Route::get('/exames','ExamesController@index');

//rota para medicos/1
Route::get('/medicos/{medico}','MedicosController@index');

// rota para medicos
Route::get('/medicos','MedicosController@index');

// rota para pedidos
Route::get('/pedidos','PedidosController@index');

//rota para pedidos/1
Route::get('/pedidos/{pedido}','PedidosController@index');