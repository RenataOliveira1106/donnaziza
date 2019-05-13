@extends('layouts.tema')
@section('titulo', 'Café da Manhã Novo')

@section('conteudo')

  <div class="row">
    <div class="card">
    <div class="card-header"> Café da Manhã Novo </div>
      <div class="card-body">

        <form action="" method="post">

          @include('produtos.cafeManha.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
