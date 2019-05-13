@extends('layouts.tema')
@section('titulo', 'Lanches Index')

@section('conteudo')

<script type="text/javascript">

$(document).ready(function(){

  $('#table').DataTable({
    "language": {
      "search": "Filtrar:",
      "show": "teste",
      "zeroRecords": "Nenhum registro encontrado",
      "lengthMenu":    "Mostrar _MENU_ Registros por pagina",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoFiltered": " - filtrado de _MAX_ registros",
      "paginate": {
        'first': "Inicio",
        'last': "Fim",
        'next': "Próxima",
        'previous': "Anterior",
      }
    }
  });

});

</script>

<div class="row">
  <div class="card col-md-12">
    <div class="card-header"> Lanches Index </div>
    <div class="card-body">

      <table id="table" class="table">
        <thead>
          <th> #ID </th>
          <th> Descrição </th>
          <th> Preço </th>
          <th> Ações </th>
        </thead>
        <tbody>
          @forelse($lanches as $lanche)
          <tr>
            <td> {{ $lanche->id }} </td>
            <td> {{ $lanche->descricao }} </td>
            <td> {{ $lanche->preco }} </td>
            <td>
              <a href="#editar_{{$lanche->id}}" data-toggle="modal"><i class="fas fa-cog" style="color: black;"></i></a>
              |
              <a href="#excluir_{{$lanche->id}}" data-toggle="modal"><i class="far fa-trash-alt" style="color: black;"></i></a>
            </td>
          </tr>

          <!-- Modal Editar -->
          <div class="modal fade" id="editar_{{$lanche->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"> Editar Lanche </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <form method="POST" action="{{ route('lanche.atualizar', $lanche->id) }}" id='form'>

                    @include('produtos.lanche.forms.form')

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                    <button type="submit" class="btn btn-success"> Salvar </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Modal Excluir -->
          <div class="modal fade" id="excluir_{{$lanche->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"> Excluir Lanche </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <form method="POST" action="{{ route('lanche.excluir', $lanche->id) }}">

                    {{ csrf_field() }}

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                    <button type="submit" class="btn btn-primary"> Excluir </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          @empty

          @endforelse

        </tbody>
      </table>

    </div>
  </div>
</div>

@endsection
