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
    Route::get('novo', 'cafeManhaController@novo')->name('cafeManha.novo'); //->middleware('auth');
    Route::post('salvar', 'cafeManhaController@salvar')->name('cafeManha.salvar'); //->middleware('auth');
    Route::get('editar', 'cafeManhaController@editar')->name('cafeManha.editar'); //->middleware('auth');
    Route::post('atualizar', 'cafeManhaController@atualizar')->name('cafeManha.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'cafeManhaController@excluir')->name('cafeManha.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'cafeManhaController@enviarPedido')->name('cafeManha.pedido'); //->middleware('auth');
  });


  //Açai
  Route::prefix('açai')->group(function(){
    Route::get('', 'AcaiController@index')->name('acai.index'); //->middleware('auth');
    Route::get('novo', 'AcaiController@novo')->name('acai.novo'); //->middleware('auth');
    Route::post('salvar', 'AcaiController@salvar')->name('acai.salvar'); //->middleware('auth');
    Route::get('editar', 'AcaiController@editar')->name('acai.editar'); //->middleware('auth');
    Route::post('atualizar', 'AcaiController@atualizar')->name('acai.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'AcaiController@excluir')->name('acai.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'AcaiController@enviarPedido')->name('acai.pedido'); //->middleware('auth');
  });


  //Bebidas
  Route::prefix('bebida')->group(function(){
    Route::get('', 'BebidaController@index')->name('bebida.index'); //->middleware('auth');
    Route::get('novo', 'BebidaController@novo')->name('bebida.novo'); //->middleware('auth');
    Route::post('salvar', 'BebidaController@salvar')->name('bebida.salvar'); //->middleware('auth');
    Route::get('editar', 'BebidaController@editar')->name('bebida.editar'); //->middleware('auth');
    Route::post('atualizar', 'BebidaController@atualizar')->name('bebida.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'BebidaController@excluir')->name('bebida.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'BebidaController@enviarPedido')->name('bebida.pedido'); //->middleware('auth');
  });


  //Crepioca
  Route::prefix('crepioca')->group(function(){
    Route::get('', 'CrepiocaController@index')->name('crepioca.index'); //->middleware('auth');
    Route::get('novo', 'CrepiocaController@novo')->name('crepioca.novo'); //->middleware('auth');
    Route::post('salvar', 'CrepiocaController@salvar')->name('crepioca.salvar'); //->middleware('auth');
    Route::get('editar', 'CrepiocaController@editar')->name('crepioca.editar'); //->middleware('auth');
    Route::post('atualizar', 'CrepiocaController@atualizar')->name('crepioca.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'CrepiocaController@excluir')->name('crepioca.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'CrepiocaController@enviarPedido')->name('crepioca.pedido'); //->middleware('auth');
  });


  //Lanches
  Route::prefix('lanche')->group(function(){
    Route::get('', 'LancheController@index')->name('lanche.index'); //->middleware('auth');
    Route::get('novo', 'LancheController@novo')->name('lanche.novo'); //->middleware('auth');
    Route::post('salvar', 'LancheController@salvar')->name('lanche.salvar'); //->middleware('auth');
    Route::get('editar', 'LancheController@editar')->name('lanche.editar'); //->middleware('auth');
    Route::post('atualizar', 'LancheController@atualizar')->name('lanche.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'LancheController@excluir')->name('lanche.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'LancheController@enviarPedido')->name('lanche.pedido'); //->middleware('auth');
  });


  //Omeletes
  Route::prefix('omelete')->group(function(){
    Route::get('', 'OmeleteController@index')->name('omelete.index'); //->middleware('auth');
    Route::get('novo', 'OmeleteController@novo')->name('omelete.novo'); //->middleware('auth');
    Route::post('salvar', 'OmeleteController@salvar')->name('omelete.salvar'); //->middleware('auth');
    Route::get('editar', 'OmeleteController@editar')->name('omelete.editar'); //->middleware('auth');
    Route::post('atualizar', 'OmeleteController@atualizar')->name('omelete.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'OmeleteController@excluir')->name('omelete.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'OmeleteController@enviarPedido')->name('omelete.pedido'); //->middleware('auth');
  });


  //Pasteis
  Route::prefix('pastel')->group(function(){
    Route::get('', 'PastelController@index')->name('pastel.index'); //->middleware('auth');
    Route::get('novo', 'PastelController@novo')->name('pastel.novo'); //->middleware('auth');
    Route::post('salvar', 'PastelController@salvar')->name('pastel.salvar'); //->middleware('auth');
    Route::get('editar', 'PastelController@editar')->name('pastel.editar'); //->middleware('auth');
    Route::post('atualizar', 'PastelController@atualizar')->name('pastel.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'PastelController@excluir')->name('pastel.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'PastelController@enviarPedido')->name('pastel.pedido'); //->middleware('auth');
  });


  //Pizzas
  Route::prefix('pizza')->group(function(){
    Route::get('', 'PizzaController@index')->name('pizza.index'); //->middleware('auth');
    Route::get('novo', 'PizzaController@novo')->name('pizza.novo'); //->middleware('auth');
    Route::post('salvar', 'PizzaController@salvar')->name('pizza.salvar'); //->middleware('auth');
    Route::get('editar', 'PizzaController@editar')->name('pizza.editar'); //->middleware('auth');
    Route::post('atualizar', 'PizzaController@atualizar')->name('pizza.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'PizzaController@excluir')->name('pizza.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'PizzaController@enviarPedido')->name('pizza.pedido'); //->middleware('auth');
  });


  //Porções
  Route::prefix('porcao')->group(function(){
    Route::get('', 'PorcaoController@index')->name('porcao.index'); //->middleware('auth');
    Route::get('novo', 'PorcaoController@novo')->name('porcao.novo'); //->middleware('auth');
    Route::post('salvar', 'PorcaoController@salvar')->name('porcao.salvar'); //->middleware('auth');
    Route::get('editar', 'PorcaoController@editar')->name('porcao.editar'); //->middleware('auth');
    Route::post('atualizar', 'PorcaoController@atualizar')->name('porcao.atualizar'); //->middleware('auth');
    Route::post('excluir/{id}', 'PorcaoController@excluir')->name('porcao.excluir'); //->middleware('auth');
    Route::get('enviarPedido', 'PorcaoController@enviarPedido')->name('porcao.pedido'); //->middleware('auth');
  });


});
