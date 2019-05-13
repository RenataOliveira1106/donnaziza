<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Omelete;

class OmeleteController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos os omeletes cadastrados
  public function index()
  {
    $omeletes = Omelete::all();
    // dd($omeletes);

    return view('produtos.omelete.index')
    ->with('omeletes', $omeletes);
  }


  // Retorna o fomulário de cadastro de omelete
  public function novo()
  {
    return view('produtos.omelete.novo');
  }



  // Salva no banco de dados um omelete cadastrado
  public function salvar(Request $request)
  {
    $omelete = new Omelete;
    $omelete->fill($request->all());

    if($omelete->save()){
      return redirect()->back()->with('success', ' Omelete salvo com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }




  // Retorna o fomulário de edição de omelete
  public function editar($id)
  {

  }




  // Atualiza o cadastro de um omelete no banco de dados
  public function atualizar(Request $request)
  {
    $omelete = Omelete::find($request->omelete_id);
    $omelete->fill($request->all());
    $omelete->save();

    return redirect()->back()->with('success', 'Omelete editado com sucesso!');
  }

  // Deleta um omelete do banco de dados
  public function excluir($id)
  {
    $omelete = Omelete::find($id);
    $omelete->delete();

    return redirect()->back()->with('success', 'Omelete excluido com sucesso!');

  }


  // ============================
  // FIM CRUD
  // ============================
}
