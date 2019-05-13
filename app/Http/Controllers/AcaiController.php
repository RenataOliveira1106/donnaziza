<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Acai;

class AcaiController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos os açais cadastrados
  public function index()
  {
    $acais = Acai::all();
    // dd($acais);

    return view('produtos.acai.index')
    ->with('acais', $acais);
  }


  // Retorna o fomulário de cadastro de açai
  public function novo()
  {

    return view('produtos.acai.novo');
  }



  // Salva no banco de dados um açai cadastrado
  public function salvar(Request $request)
  {
    $acai = new Acai;
    $acai->fill($request->all());

    if($acai->save()){
      return redirect()->back()->with('success', ' Açai salva com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }




  // Retorna o fomulário de edição de açai
  public function editar($id)
  {

  }




  // Atualiza o cadastro de um açai no banco de dados
  public function atualizar(Request $request)
  {
    $acai = Acai::find($request->acai_id);
    $acai->fill($request->all());
    $acai->save();

    return redirect()->back()->with('success', 'Açai editada com sucesso!');
  }

  // Deleta um açai do banco de dados
  public function excluir($id)
  {
    $acai = Acai::find($id);
    $acai->delete();

    return redirect()->back()->with('success', 'Açai excluida com sucesso!');
  }


  // ============================
  // FIM CRUD
  // ============================
}
