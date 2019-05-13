@extends('layouts.tema')
@section('titulo', 'Açai Novo')

@section('conteudo')

  <div class="row">
    <div class="card" class="col-md-12">
    <div class="card-header"> Açai Novo </div>
      <div class="card-body">

        <form action="{{ route('acai.salvar') }}" method="post">

          @include('produtos.acai.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
