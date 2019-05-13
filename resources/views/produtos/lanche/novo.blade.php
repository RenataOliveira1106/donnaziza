@extends('layouts.tema')
@section('titulo', 'Lanche Novo')

@section('conteudo')

  <div class="row">
    <div class="card">
    <div class="card-header"> Lanche Novo </div>
      <div class="card-body">

        <form action="" method="post">

          @include('produtos.lanche.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
