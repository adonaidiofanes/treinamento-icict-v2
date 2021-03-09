<?php

use Illuminate\Support\Facades\Auth;

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

Route::middleware('autenticador')->group(function(){
    // definir prefixo de url
    Route::prefix('infracoes')->group(function(){ // <- grupo: pertence a url /infracoes
        
        Route::get('/', 'InfracoesController@index')
            ->name('listar_infracoes')
            ->middleware('can:editar_infracao');

        Route::get('/criar', 'InfracoesController@create')->name('form_criar_infracao');
        Route::post('/criar', 'InfracoesController@store');
        Route::delete('/{id}', 'InfracoesController@destroy');
        Route::put('/atualizar/{id}', 'InfracoesController@update')->name('atualizar_infracao');
        Route::get('/atualizar/{id}', 'InfracoesController@edit')->name('form_editar_infracao');
        Route::get('/infracoes/exibir/{id}', 'InfracoesController@show')->name('exibir_infracao');
    });
});


Route::get('/vacinas/listar', 'VacinasController@index')->name('listar_vacinas');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas para registro de usuário e login
Route::get('/entrar', 'AcessoController@index');
Route::post('/entrar', 'AcessoController@entrar');
Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::get('/sair', function(){
    Auth::logout();
    return redirect('/entrar');
});