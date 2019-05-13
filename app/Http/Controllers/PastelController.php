<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pastel;

class PastelController extends Controller
{
  // ============================
  // INICIO CRUD
  // ============================


  // Retorna uma tabela com todos os pasteis cadastrados
  public function index()
  {
    $pasteis = Pastel::all();
    // dd($pasteis);

    return view('produtos.pastel.index')
    ->with('pasteis', $pasteis);
  }


  // Retorna o fomulário de cadastro de pastel
  public function novo()
  {
    return view('produtos.pastel.novo');
  }



  // Salva no banco de dados um pastel cadastrado
  public function salvar(Request $request)
  {
    $pastel = new Pastel;
    $pastel->fill($request->all());

    if($pastel->save()){
      return redirect()->back()->with('success', ' Pastel salvo com sucesso!');
    }else{
      return redirect()->back()->with('danger', ' Erro ao salvar!');
    }
  }




  // Retorna o fomulário de edição de pastel
  public function editar($id)
  {

  }




  // Atualiza o cadastro de um pastel no banco de dados
  public function atualizar(Request $request)
  {
    $pastel = Pastel::find($request->pastel_id);
    $pastel->fill($request->all());
    $pastel->save();

    return redirect()->back()->with('success', 'Pastel editado com sucesso!');
  }

  // Deleta um pastel do banco de dados
  public function excluir($id)
  {
    $pastel = Pastel::find($id);
    $pastel->delete();

    return redirect()->back()->with('success', 'Pastel excluido com sucesso!');
  }


  // ============================
  // FIM CRUD
  // ============================
}
