<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Porcao;

class PorcaoController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos as porções cadastradas
  public function index()
  {
    $porcoes = Porcao::all();
    // dd($porcoes);

    return view('produtos.porcao.index')
    ->with('porcoes', $porcoes);
  }


  // Retorna o fomulário de cadastro de porção
  public function novo()
  {
    return view('produtos.porcao.novo');
  }



  // Salva no banco de dados uma porção cadastrada
  public function salvar(Request $request)
  {
    $porcao = new Porcao;
    $porcao->fill($request->all());

    if($porcao->save()){
      return redirect()->back()->with('success', ' Porção salva com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }




  // Retorna o fomulário de edição de porção
  public function editar($id)
  {

  }




  // Atualiza o cadastro de uma porção no banco de dados
  public function atualizar(Request $request)
  {
    $porcao = Porcao::find($request->porcao_id);
    $porcao->fill($request->all());
    $porcao->save();

    return redirect()->back()->with('success', 'Porção editada com sucesso!');
  }

  // Deleta uma porção do banco de dados
  public function excluir($id)
  {
    $porcao = Porcao::find($id);
    $porcao->delete();

    return redirect()->back()->with('success', 'Porção excluida com sucesso!');
  }


  // ============================
  // FIM CRUD
  // ============================
}
