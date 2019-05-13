@extends('layouts.tema')
@section('titulo', 'Pizza Novo')

@section('conteudo')

  <div class="row">
    <div class="card">
    <div class="card-header"> Pizza Novo </div>
      <div class="card-body">

        <form action="" method="post">

          @include('produtos.pizza.form.form')

        </form>

      </div>
    </div>
  </div>

@endsection
