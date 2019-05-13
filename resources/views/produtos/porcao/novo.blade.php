@extends('layouts.tema')
@section('titulo', 'Porção Novo')

@section('conteudo')

  <div class="row">
    <div class="card">
    <div class="card-header"> Porção Novo </div>
      <div class="card-body">

        <form action="" method="post">

          @include('produtos.porcao.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
