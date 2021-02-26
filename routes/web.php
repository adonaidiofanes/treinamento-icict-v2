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

// Página de listagem de infrações
Route::get('/infracoes', 'InfracoesController@index');
Route::get('/infracoes/criar', 'InfracoesController@create');