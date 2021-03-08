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

Route::get('/ola-mundo', function(){
    echo "Olá Laravel";
});

Route::get('/infracoes', 'InfracoesController@index')->name('listar_infracoes');
Route::get('/infracoes/criar', 'InfracoesController@create')->name('form_criar_infracao');
Route::post('/infracoes/criar', 'InfracoesController@store');
Route::delete('/infracoes/{id}', 'InfracoesController@destroy');

Route::put('/infracoes/atualizar/{id}', 'InfracoesController@update')->name('atualizar_infracao');
Route::get('/infracoes/atualizar/{id}', 'InfracoesController@edit')->name('form_editar_infracao');