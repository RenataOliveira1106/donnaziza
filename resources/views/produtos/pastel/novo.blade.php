@extends('layouts.tema')
@section('titulo', 'Pastel Novo')

@section('conteudo')

  <div class="row">
    <div class="card" class="col-md-12">
    <div class="card-header"> Pastel Novo </div>
      <div class="card-body">

        <form action="{{ route('pastel.salvar') }}" method="post">

          @include('produtos.pastel.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
