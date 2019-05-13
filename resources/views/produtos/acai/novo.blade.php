@extends('layouts.tema')
@section('titulo', 'Açai Novo')

@section('conteudo')

  <div class="row">
    <div class="card">
    <div class="card-header"> Açai Novo </div>
      <div class="card-body">

        <form action="" method="post">

          @include('produtos.acai.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
