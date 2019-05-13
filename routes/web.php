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

//Produtos
Route::prefix('cardapio')->group(function(){

  //Café da manhã
  Route::prefix('cafeManha')->group(function(){
    Route::get('', 'cafeManhaController@index')->name('cafeManha.index'); //->middleware('auth');
    Route::post('salvar', 'cafeManhaController@salvar')->name('cafeManha.salvar'); //->middleware('auth');
    Route::get('editar', 'cafeManhaController@editar')->name('cafeManha.editar'); //->middleware('auth');
    Route::post('atualizar', 'cafeManhaController@atualizar')->name('cafeManha.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'cafeManhaController@excluir')->name('cafeManha.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'cafeManhaController@enviarPedido')->name('cafeManha.pedido'); //->middleware('auth');
  });


  //Café da manhã
  Route::prefix('cafeManha')->group(function(){
    Route::get('', 'cafeManhaController@index')->name('cafeManha.index'); //->middleware('auth');
    Route::post('salvar', 'cafeManhaController@salvar')->name('cafeManha.salvar'); //->middleware('auth');
    Route::get('editar', 'cafeManhaController@editar')->name('cafeManha.editar'); //->middleware('auth');
    Route::post('atualizar', 'cafeManhaController@atualizar')->name('cafeManha.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'cafeManhaController@excluir')->name('cafeManha.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'cafeManhaController@enviarPedido')->name('cafeManha.pedido'); //->middleware('auth');
  });


});
