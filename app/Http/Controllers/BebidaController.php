<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bebida;

class BebidaController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos as bebidas cadastradas
  public function index()
  {
    $bebidas = Bebida::all();
    // dd($bebidas);

    return view('produtos.bebida.index')
    ->with('bebidas', $bebidas);
  }


  // Retorna o fomulário de cadastro de bebida
  public function novo()
  {

    return view('produtos.bebida.novo');
  }



  // Salva no banco de dados uma bebida cadastrada
  public function salvar(Request $request)
  {
    $bebida = new Bebida;
    $bebida->fill($request->all());

    if($bebida->save()){
      return redirect()->back()->with('success', ' Bebida salva com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }


  // Retorna o fomulário de edição de bebida
  public function editar($id)
  {

  }




  // Atualiza o cadastro de uma bebida no banco de dados
  public function atualizar(Request $request)
  {
    $bebida = Bebida::find($request->bebida_id);
    $bebida->fill($request->all());
    $bebida->save();

    return redirect()->back()->with('success', 'Bebida editada com sucesso!');
  }

  // Deleta uma bebida do banco de dados
  public function excluir($id)
  {
    $bebida = Bebida::find($id);
    $bebida->delete();

    return redirect()->back()->with('success', 'Bebida excluida com sucesso!');
  }


  // ============================
  // FIM CRUD
  // ============================
}
