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

// rota para medicos
Route::get('/medicos','MedicosController@index');
//Route::get('/exames',function{
//    return view('exames.index');
//});