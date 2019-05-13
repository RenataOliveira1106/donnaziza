@extends('layouts.tema')
@section('titulo', 'Omelete Novo')

@section('conteudo')

  <div class="row">
    <div class="card">
    <div class="card-header"> Omelete Novo </div>
      <div class="card-body">

        <form action="" method="post">

          @include('produtos.omelete.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
