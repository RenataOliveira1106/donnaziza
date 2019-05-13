<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzaController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos as pizzas cadastradas
  public function index()
  {
    $pizzas = Pizza::all();
    // dd($pizzas);

    return view('produtos.pizza.index')
    ->with('pizzas', $pizzas);
  }


  // Retorna o fomulário de cadastro de pizza
  public function novo()
  {
    return view('produtos.pizza.novo');
  }



  // Salva no banco de dados uma pizza cadastrada
  public function salvar(Request $request)
  {
    $pizza = new Pizza;
    $pizza->fill($request->all());

    if($pizza->save()){
      return redirect()->back()->with('success', ' Pizza salvo com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }




  // Retorna o fomulário de edição de pizza
  public function editar($id)
  {

  }




  // Atualiza o cadastro de uma pizza no banco de dados
  public function atualizar(Request $request)
  {
    $pizza = Pizza::find($request->pizza_id);
    $pizza->fill($request->all());
    $pizza->save();

    return redirect()->back()->with('success', 'Pizza editado com sucesso!');
  }

  // Deleta uma pizza do banco de dados
  public function excluir($id)
  {
    $pizza = Pizza::find($id);
    $pizza->delete();

    return redirect()->back()->with('success', 'Pizza excluido com sucesso!');

  }


  // ============================
  // FIM CRUD
  // ============================
}
