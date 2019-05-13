@extends('layouts.tema')
@section('titulo', 'Omelete Novo')

@section('conteudo')

  <div class="row">
    <div class="card" class="col-md-12">
    <div class="card-header"> Omelete Novo </div>
      <div class="card-body">

        <form action="{{ route('omelete.salvar') }}" method="post">

          @include('produtos.omelete.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
