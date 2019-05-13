<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lanche;

class LancheController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos os lanches cadastrados
  public function index()
  {
    $lanches = Lanche::all();
    // dd($lanches);

    return view('produtos.lanche.index')
    ->with('lanches', $lanches);
  }


  // Retorna o fomulário de cadastro de lanche
  public function novo()
  {

    return view('produtos.lanche.novo');
  }



  // Salva no banco de dados um lanche cadastrado
  public function salvar(Request $request)
  {
    $lanche = new Lanche;
    $lanche->fill($request->all());

    if($lanche->save()){
      return redirect()->back()->with('success', ' Lanche salvo com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }




  // Retorna o fomulário de edição de lanche
  public function editar($id)
  {

  }




  // Atualiza o cadastro de um lanche no banco de dados
  public function atualizar(Request $request)
  {
    $lanche = Lanche::find($request->lanche_id);
    $lanche->fill($request->all());
    $lanche->save();

    return redirect()->back()->with('success', 'Lanche editado com sucesso!');
  }

  // Deleta um lanche do banco de dados
  public function excluir($id)
  {
    $lanche = Lanche::find($id);
    $lanche->delete();

    return redirect()->back()->with('success', 'Lanche excluido com sucesso!');
  }


  // ============================
  // FIM CRUD
  // ============================
}
