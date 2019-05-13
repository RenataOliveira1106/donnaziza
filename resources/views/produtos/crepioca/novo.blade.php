@extends('layouts.tema')
@section('titulo', 'Crepioca Novo')

@section('conteudo')

  <div class="row">
    <div class="card" class="col-md-12">
    <div class="card-header"> Crepioca Novo </div>
      <div class="card-body">

        <form action="{{ route('crepioca.salvar') }}" method="post">

          @include('produtos.crepioca.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
