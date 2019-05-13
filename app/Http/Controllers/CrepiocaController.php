<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crepioca;

class CrepiocaController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos as crepiocas cadastradas
  public function index()
  {
    $crepiocas = Crepioca::all();
    // dd($crepiocas);

    return view('produtos.crepioca.index')
    ->with('crepiocas', $crepiocas);
  }


  // Retorna o fomulário de cadastro de crepioca
  public function novo()
  {

    return view('produtos.crepioca.novo');
  }



  // Salva no banco de dados uma crepioca cadastrada
  public function salvar(Request $request)
  {
    $crepioca = new Crepioca;
    $crepioca->fill($request->all());

    if($crepioca->save()){
      return redirect()->back()->with('success', ' Crepioca salva com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }




  // Retorna o fomulário de edição de crepioca
  public function editar($id)
  {

  }




  // Atualiza o cadastro de uma crepioca no banco de dados
  public function atualizar(Request $request)
  {
    $crepioca = Crepioca::find($request->crepioca_id);
    $crepioca->fill($request->all());
    $crepioca->save();

    return redirect()->back()->with('success', 'Crepioca editada com sucesso!');
  }

  // Deleta uma crepioca do banco de dados
  public function excluir($id)
  {
    $crepioca = Crepioca::find($id);
    $crepioca->delete();

    return redirect()->back()->with('success', 'Crepioca excluida com sucesso!');
  }


  // ============================
  // FIM CRUD
  // ============================
}
