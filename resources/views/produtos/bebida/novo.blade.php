@extends('layouts.tema')
@section('titulo', 'Bebida Novo')

@section('conteudo')

  <div class="row">
    <div class="card">
    <div class="card-header"> Bebida Novo </div>
      <div class="card-body">

        <form action="" method="post">

          @include('produtos.bebida.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
